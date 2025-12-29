<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\WithdrawRequest;

class WithdrawListController extends Controller
{
    public function index()
    {
        $withdraws = WithdrawRequest::with(['vendor','method'])
            ->latest()
            ->get();

        return view('pages.super_admin.withdraw_list.index', compact('withdraws'));
    }

    public function paid($id)
    {
        $withdraw = WithdrawRequest::findOrFail($id);

        $withdraw->update([
            'status' => 'paid'
        ]);

        return back()->with('success','Withdraw marked as paid');
    }

    public function decline($id)
    {
        $withdraw = WithdrawRequest::findOrFail($id);

        $withdraw->update([
            'status' => 'decline'
        ]);

        return back()->with('success','Withdraw declined');
    }
}
