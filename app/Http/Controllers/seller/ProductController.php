<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    // public function index()
    // {
    //     $products = Product::where('vendor_id', auth()->id())->get();
    //     return view('vendor.products.index', compact('products'));
    // }

    // public function create()
    // {
    //     return view('vendor.products.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'price' => 'required|numeric',
    //         'image' => 'nullable|image',
    //     ]);

    //     $image = null;
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image')->store('products', 'public');
    //     }

    //     Product::create([
    //         'vendor_id' => auth()->id(),
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'description' => $request->description,
    //         'image' => $image,
    //         'status' => 'pending', // 🔥 penting
    //     ]);

    //     return redirect()->route('vendor.products.index')
    //         ->with('success', 'Product berhasil dikirim dan menunggu approval');
    // }


    public function index()
    {
        $products = Product::where('vendor_id', auth()->id())
            ->latest()
            ->get();

        return view('pages.seller.products.index', compact('products'));
    }

    public function create()
    {
        return view('pages.seller.products.create');
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'description' => 'nullable|string',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'image' => $imagePath,
        'vendor_id' => auth()->id(), // 🔥 PENTING
        'status' => 'pending',       // 🔥 MASUK ADMIN
    ]);

    return redirect()
        ->route('seller.products.index')
        ->with('success', 'Product berhasil dikirim, menunggu approval admin');
}


    public function edit(Product $product)
    {
        // 🔐 pastikan product milik seller
        if ($product->vendor_id !== auth()->id()) {
            abort(403);
        }

        return view('pages.seller.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        if ($product->vendor_id !== auth()->id()) {
            abort(403);
        }

        // 🔒 tidak boleh edit jika sudah approved
        if ($product->status === 'approved') {
            return back()->with('error', 'Product yang sudah approved tidak dapat diubah');
        }

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $product->image = $request->file('image')->store('products', 'public');
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => 'pending', // 🔥 reset ke pending
        ]);

        return redirect()
            ->route('seller.products.index')
            ->with('success', 'Product berhasil diperbarui & menunggu approval ulang');
    }

    public function destroy(Product $product)
    {
        if ($product->vendor_id !== auth()->id()) {
            abort(403);
        }

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();
        return back()->with('success', 'Product berhasil dihapus');
    }
}
