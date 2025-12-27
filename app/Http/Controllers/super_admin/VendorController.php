<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\RequestToVendor;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
public function approve($id)
{
    $request = RequestToVendor::findOrFail($id);

    // 🔒 CEK: jangan buat vendor dua kali
    if (Vendor::where('user_id', $request->user_id)->exists()) {
        return back()->with('error', 'User sudah menjadi vendor');
    }

    DB::transaction(function () use ($request) {

        // 🔥 INI WAJIB ADA
        Vendor::create([
            'user_id'   => $request->user_id,
            'shop_name' => $request->shop_name,
            'address'   => $request->address,
            'phone'     => $request->phone,
            'status'    => 'approved',
            'role'      => 'seller',
        ]);

        // update request
        $request->update([
            'status' => 'approved',
        ]);
    });

    return back()->with('success', 'Vendor berhasil di-approve');
}

}
