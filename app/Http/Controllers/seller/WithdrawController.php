<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WithdrawMethod;
use App\Models\WithdrawRequest;

class WithdrawController extends Controller
{

    public function index()
    {
        $withdraws = WithdrawRequest::with('method')
            ->where('vendor_id', auth()->id())
            ->latest()
            ->get();

        return view('pages.seller.withdraw.index', compact('withdraws'));
    }

    public function create()
    {
        $methods = WithdrawMethod::where('status', 1)->get();
        $balance = auth()->user()->wallet->balance;
        return view('pages.seller.withdraw.create', compact('methods', 'balance'));
    }

    public function store(Request $request)
    {
        $method = WithdrawMethod::findOrFail($request->withdraw_method_id);

     $request->validate([
    'withdraw_method_id' => 'required|exists:withdraw_methods,id',
    'withdraw_amount' => 'required|numeric|min:' . $method->minimum_amount,
    'account_info' => 'required',
]);


        WithdrawRequest::create([
            'vendor_id' => auth()->id(),
            'withdraw_method_id' => $method->id,
            'total_amount' => auth()->user()->wallet->balance,
            'withdraw_amount' => $request->withdraw_amount,
            'withdraw_charge' => $method->withdraw_charge,
            'account_info' => $request->account_info,
        ]);

        return redirect()->route('seller.withdraw.index');
    }
}
