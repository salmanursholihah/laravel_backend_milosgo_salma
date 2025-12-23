<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestToVendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\VendorApprovedMail;
use App\Mail\VendorRejectMail;

class VendorPendingController extends Controller
{
    public function index()
    {
        $vendors = RequestToVendor::with('user')
            ->where('status', 'pending')
            ->latest()
            ->get();

        return view('pages.super_admin.pending_vendor.index', compact('vendors'));
    }

    public function approve($id)
    {
        $vendor = DB::transaction(function () use ($id) {
            $vendor = RequestToVendor::with('user')->findOrFail($id);

            $vendor->update(['status' => 'approved']);
            $vendor->user->update(['role' => 'vendor']);

            return $vendor;
        });

        // kirim email setelah transaction sukses
        Mail::to($vendor->user->email)
            ->send(new VendorApprovedMail($vendor));

        return back()->with('success', 'Vendor berhasil di approve');
    }

    public function reject($id)
    {
        $vendor = RequestToVendor::with('user')->findOrFail($id);

        $vendor->update(['status' => 'rejected']);

        Mail::to($vendor->user->email)
            ->send(new VendorRejectMail($vendor));

        return back()->with('success', 'Vendor berhasil di reject');
    }
}
