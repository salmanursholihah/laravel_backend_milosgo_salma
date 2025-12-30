<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VendorProfileController extends Controller
{
    /**
     * Edit vendor profile (ADMIN ONLY)
     */
    public function edit(Vendor $vendor)
    {
        return view('pages.super_admin.vendor_profile.index', compact('vendor'));
    }

    /**
     * Update vendor profile (ADMIN ONLY)
     */
    public function update(Request $request, Vendor $vendor)
    {
        $request->validate([
            'shop_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'nullable|string|max:255',
            'address'     => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'banner'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'fb_link'     => 'nullable|url',
            'tw_link'     => 'nullable|url',
            'insta_link'  => 'nullable|url',
        ]);

        // upload banner
        if ($request->hasFile('banner')) {
            if ($vendor->banner) {
                Storage::disk('public')->delete($vendor->banner);
            }

            $vendor->banner = $request->file('banner')
                ->store('vendors', 'public');
        }

        // update data
        $vendor->update([
            'shop_name'   => $request->shop_name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'address'     => $request->address,
            'description' => $request->description,
            'fb_link'     => $request->fb_link,
            'tw_link'     => $request->tw_link,
            'insta_link'  => $request->insta_link,
        ]);

        return back()->with('success', 'Vendor profile updated by admin');
    }
}
