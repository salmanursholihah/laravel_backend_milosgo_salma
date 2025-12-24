<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApprovalController extends Controller
{
    public function index(Request $request)
{
    $products = Product::with('vendor')
        ->when($request->status, function ($q) use ($request) {
            $q->where('status', $request->status);
        })
        ->get();

    return view('pages.super_admin.product.index', compact('products'));
}

public function create()
{
    return view('pages.super_admin.product.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
    ]);

    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'status' => 'approved', // 🔥 product admin langsung approved
        'vendor_id' => null,
    ]);

    return redirect()
        ->route('super_admin.product.index')
        ->with('success', 'Product berhasil ditambahkan');
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
        ->whereNotNull('vendor_id')
        ->where('status', 'approved')
        ->get();

    return view('pages.super_admin.product.seller_product', compact('products'));
}
}

