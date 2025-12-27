<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Ambil / buat vendor otomatis jika user seller
     */
    private function getOrCreateVendor()
    {
        $user = auth()->user();

        if ($user->role !== 'seller') {
            abort(403, 'Akses ditolak');
        }

        return Vendor::firstOrCreate(
            ['user_id' => $user->id],
            [
                'shop_name' => $user->name,
                'address'   => '-',
                'phone'     => '-',
                'status'    => 'approved', // 🔥 AUTO APPROVED
            ]
        );
    }

    /**
     * List product milik seller
     */
    public function index()
    {
        $vendor = $this->getOrCreateVendor();

        $products = Product::where('vendor_id', $vendor->id)
            ->latest()
            ->get();

        return view('pages.seller.products.index', compact('products'));
    }

    /**
     * Form create product
     */
    public function create()
    {
        // auto vendor dipastikan ada
        $this->getOrCreateVendor();

        return view('pages.seller.products.create');
    }

    /**
     * Simpan product → MASUK ADMIN (PENDING)
     */
    public function store(Request $request)
    {
        $vendor = $this->getOrCreateVendor();

        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'vendor_id'   => $vendor->id,   // ✅ FIX FK
            'name'        => $request->name,
            'price'       => $request->price,
            'description' => $request->description,
            'image'       => $imagePath,
            'status'      => 'pending',     // 🔥 MASUK SUPER ADMIN
        ]);

        return redirect()
            ->route('seller.products.index')
            ->with('success', 'Product berhasil ditambahkan & menunggu approval admin');
    }

    /**
     * Form edit product
     */
    public function edit(Product $product)
    {
        $vendor = $this->getOrCreateVendor();

        if ($product->vendor_id !== $vendor->id) {
            abort(403);
        }

        if ($product->status === 'approved') {
            return redirect()
                ->route('seller.products.index')
                ->with('error', 'Product yang sudah approved tidak dapat diedit');
        }

        return view('pages.seller.products.edit', compact('product'));
    }

    /**
     * Update product (reset ke pending)
     */
    public function update(Request $request, Product $product)
    {
        $vendor = $this->getOrCreateVendor();

        if ($product->vendor_id !== $vendor->id) {
            abort(403);
        }

        if ($product->status === 'approved') {
            return redirect()
                ->route('seller.products.index')
                ->with('error', 'Product yang sudah approved tidak dapat diedit');
        }

        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $product->image = $request->file('image')->store('products', 'public');
        }

        $product->update([
            'name'        => $request->name,
            'price'       => $request->price,
            'description' => $request->description,
            'status'      => 'pending', // 🔥 review ulang admin
        ]);

        return redirect()
            ->route('seller.products.index')
            ->with('success', 'Product berhasil diperbarui & menunggu approval admin');
    }

    /**
     * Hapus product
     */
    public function destroy(Product $product)
    {
        $vendor = $this->getOrCreateVendor();

        if ($product->vendor_id !== $vendor->id) {
            abort(403);
        }

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return back()->with('success', 'Product berhasil dihapus');
    }
}
