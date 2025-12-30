<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\FooterInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterInfoController extends Controller
{
    public function index()
    {
        // Ambil satu data, kalau belum ada → buat
        $footerInfo = FooterInfo::firstOrCreate([]);

        return view('pages.super_admin.footer_info.index', compact('footerInfo'));
    }

    public function edit()
    {
        $footerInfo = FooterInfo::firstOrCreate([]);

        return view('pages.super_admin.footer_info.edit', compact('footerInfo'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo'      => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'phone'     => 'nullable|string|max:255',
            'email'     => 'nullable|email|max:255',
            'address'   => 'nullable|string',
            'copyright' => 'nullable|string|max:255',
        ]);

        $footerInfo = FooterInfo::firstOrCreate([]);

        // upload logo
        if ($request->hasFile('logo')) {
            if ($footerInfo->logo) {
                Storage::disk('public')->delete($footerInfo->logo);
            }

            $footerInfo->logo = $request->file('logo')->store('footer', 'public');
        }

        $footerInfo->update([
            'phone'     => $request->phone,
            'email'     => $request->email,
            'address'   => $request->address,
            'copyright' => $request->copyright,
        ]);

        return back()->with('success', 'Footer info updated');
    }
}
