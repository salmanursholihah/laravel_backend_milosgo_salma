<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WithdrawRequest;

class WithdrawRequestController extends Controller
{
    public function index()
    {
        $withdraws = WithdrawRequest::with('vendor','withdrawMethod')->latest()->get();
        return view('admin.withdraw_requests.index', compact('withdraws'));
    }

    public function paid($id)
    {
        $withdraw = WithdrawRequest::findOrFail($id);
        $withdraw->update(['status'=>'paid']);

        $withdraw->vendor->wallet->decrement('balance', $withdraw->withdraw_amount);

        return back();
    }

    public function decline(Request $request, $id)
    {
        $withdraw = WithdrawRequest::findOrFail($id);
        $withdraw->update([
            'status'=>'decline',
            'admin_note'=>$request->note
        ]);

        return back();
    }
}

