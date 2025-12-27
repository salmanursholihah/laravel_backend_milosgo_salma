<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductApprovalController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('vendor', 'images')
            ->when($request->status, function ($q) use ($request) {
                $q->where('status', $request->status);
            })
            ->get();

        return view('pages.super_admin.product.index', compact('products'));
    }

    public function create()
    {

        $vendors = Vendor::where('status', 'approved')->get();
        return view('pages.super_admin.product.create', compact('vendors'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'vendor_id' => 'required|exists:vendors,id',
            'name'      => 'required|string|max:255',
            'price'     => 'required|numeric|min:0',
            'images'    => 'required|array',
            'images.*'  => 'image|mimes:jpg,jpeg,png,webp|max:10000',
        ]);

        DB::transaction(function () use ($request) {

            // ✅ product PASTI punya vendor_id
            $product = Product::create([
                'vendor_id' => $request->vendor_id,
                'name'      => $request->name,
                'price'     => $request->price,
                'status'    => 'pending', // optional tapi recommended
            ]);

            // ✅ simpan multi image
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');

                $product->images()->create([
                    'image' => $path
                ]);
            }
        });

        return redirect()
            ->route('super_admin.product.index')
            ->with('success', 'Product vendor berhasil dibuat');
    }

    public function all()
    {
        $products = Product::with('vendor')->latest()->get();
        return view('pages.super_admin.product.all', compact('products'));
    }

    public function pending()
    {
        $products = Product::with('vendor')
            ->where('status', 'pending')
            ->get();

        return view('pages.super_admin.product.pending', compact('products'));
    }

    public function approve($id)
    {
        Product::findOrFail($id)->update(['status' => 'approved']);
        return back()->with('success', 'Product approved');
    }

    public function reject($id)
    {
        Product::findOrFail($id)->update(['status' => 'rejected']);
        return back()->with('success', 'Product rejected');
    }

    public function filter(Request $request)
    {
        $products = Product::where('status', $request->status)->get();
        return view('pages.super_admin.product.all', compact('products'));
    }

    public function seller_product()
    {
        $products = Product::with('vendor')
            ->whereNotNull('vendor_id') // 🔥 product dari seller saja
            ->latest()
            ->get();

        return view('pages.super_admin.product.seller_product', compact('products'));
    }
}
