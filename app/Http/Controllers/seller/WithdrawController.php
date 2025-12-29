<?php

// namespace App\Http\Controllers\seller;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\WithdrawMethod;
// use App\Models\WithdrawRequest;

// class WithdrawController extends Controller
// {
//     /**
//      * List withdraw milik seller
//      */
//     public function index()
//     {
//         $withdraws = WithdrawRequest::with('method')
//             ->where('vendor_id', auth()->id())
//             ->latest()
//             ->get();

//         return view('pages.seller.withdraw.index', compact('withdraws'));
//     }

//     /**
//      * Form request withdraw
//      */
//  public function create()
//     {
//         $methods = WithdrawMethod::where('status', 1)->get();

//         $wallet = auth()->user()->wallet;
//         $balance = $wallet ? $wallet->balance : 0;

//         return view('pages.seller.withdraw.create', compact(
//             'methods',
//             'balance'
//         ));
//     }

//     /**
//      * Simpan request withdraw
//      */
// public function store(Request $request)
// {
//     $method = WithdrawMethod::findOrFail($request->withdraw_method_id);

//     $request->validate([
//         'withdraw_method_id' => 'required|exists:withdraw_methods,id',
//         'withdraw_amount'    => 'required|numeric|min:' . $method->minimum_amount,

//         'account_name'       => 'required|string|max:100',
//         'bank_name'          => 'required|string|max:50',
//         'account_number'     => 'required|string|max:30',
//     ]);

//     $wallet = auth()->user()->wallet;

//     if (!$wallet) {
//         return back()->withErrors(['wallet' => 'Wallet belum tersedia']);
//     }

//     if ($request->withdraw_amount > $wallet->balance) {
//         return back()->withErrors(['withdraw_amount' => 'Saldo tidak mencukupi']);
//     }

//     // ✅ HITUNG DENGAN ANGKA (INI PENTING)
//     $charge = ($request->withdraw_amount * $method->withdraw_charge) / 100;
//     $totalAmount = $request->withdraw_amount + $charge;

//     // ✅ SIMPAN KE DATABASE
//     WithdrawRequest::create([
//         'vendor_id'          => auth()->id(),
//         'withdraw_method_id' => $method->id,
//         'withdraw_amount'    => $request->withdraw_amount,
//         'withdraw_charge'    => $charge,
//         'total_amount'       => $totalAmount,

//         'account_name'       => $request->account_name,
//         'bank_name'          => $request->bank_name,
//         'account_number'     => $request->account_number,
//         'status'             => 'pending',
//     ]);

//     return redirect()
//         ->route('seller.withdraw.index')
//         ->with('success', 'Withdraw request berhasil dikirim');
// }
// }



namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WithdrawMethod;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\DB;

class WithdrawController extends Controller
{
    public function index()
    {
        $withdraws = WithdrawRequest::with('method')
            ->where('vendor_id', auth()->user()->vendor->id)
            ->latest()
            ->get();

        return view('pages.seller.withdraw.index', compact('withdraws'));
    }

    public function create()
    {
        $methods = WithdrawMethod::where('status', 1)->get();
        $balance = auth()->user()->wallet->balance ?? 0;

        return view('pages.seller.withdraw.create', compact('methods', 'balance'));
    }

    public function store(Request $request)
    {
        $method = WithdrawMethod::findOrFail($request->withdraw_method_id);

        $request->validate([
            'withdraw_method_id' => 'required|exists:withdraw_methods,id',
            'withdraw_amount'    => 'required|numeric|min:' . $method->minimum_amount,
            'account_name'       => 'required|string|max:100',
            'bank_name'          => 'required|string|max:50',
            'account_number'     => 'required|string|max:30',
        ]);

        $user   = auth()->user();
        $wallet = $user->wallet;

        if (!$wallet) {
            return back()->withErrors(['wallet' => 'Wallet belum tersedia']);
        }

        $charge       = ($request->withdraw_amount * $method->withdraw_charge) / 100;
        $totalDeduct  = $request->withdraw_amount + $charge;

        if ($wallet->balance < $totalDeduct) {
            return back()->withErrors(['withdraw_amount' => 'Saldo tidak mencukupi']);
        }

        DB::transaction(function () use ($wallet, $request, $method, $charge, $user) {

            // 🔻 Kurangi saldo tersedia
            $wallet->decrement('balance', $request->withdraw_amount);

            // ⏳ Masukkan ke pending
            $wallet->increment('pending_balance', $request->withdraw_amount);

            WithdrawRequest::create([
                'vendor_id'          => $user->vendor->id,
                'withdraw_method_id' => $method->id,
                'withdraw_amount'    => $request->withdraw_amount,
                'withdraw_charge'    => $charge,
                'total_amount'       => $request->withdraw_amount + $charge,
                'account_name'       => $request->account_name,
                'bank_name'          => $request->bank_name,
                'account_number'     => $request->account_number,
                'status'             => 'pending',
            ]);
        });

        return redirect()
            ->route('seller.withdraw.index')
            ->with('success', 'Withdraw request berhasil dikirim');
    }
}


