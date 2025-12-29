<?php

// namespace App\Http\Controllers\super_admin;

// use App\Http\Controllers\Controller;
// use App\Models\WithdrawRequest;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// class WithdrawListController extends Controller
// {
//     public function index()
//     {
//         $withdraws = WithdrawRequest::with(['vendor','method'])
//             ->latest()
//             ->get();

//         return view('pages.super_admin.withdraw_list.index', compact('withdraws'));
//     }

// public function paid($id)
// {
//  DB::transaction(function () use ($id) {

//     $withdraw = WithdrawRequest::with('vendor.user.wallet')->findOrFail($id);

//     if ($withdraw->status !== 'pending') {
//         abort(400, 'Withdraw sudah diproses');
//     }

//     $user = $withdraw->vendor->user;

//     $wallet = $user->wallet()->firstOrCreate(
//         ['user_id' => $user->id],
//         ['balance' => 0, 'pending_balance' => 0]
//     );

//     $totalDeduct = $withdraw->withdraw_amount + $withdraw->withdraw_charge;

//     if ($wallet->balance < $totalDeduct) {
//         abort(400, 'Saldo vendor tidak mencukupi');
//     }

//     $wallet->decrement('balance', $totalDeduct);

//     $withdraw->update([
//         'status' => 'paid'
//     ]);
// });
//     return back()->with('success','Withdraw marked as paid');
// }

//     public function decline($id)
//     {
//         $withdraw = WithdrawRequest::findOrFail($id);

//         $withdraw->update([
//             'status' => 'decline'
//         ]);

//         return back()->with('success','Withdraw declined');
//     }
// }



namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\WithdrawPaidMail;

class WithdrawListController extends Controller
{
    public function index()
    {
        $withdraws = WithdrawRequest::with(['vendor.user.wallet', 'method'])
            ->latest()
            ->get();

        return view('pages.super_admin.withdraw_list.index', compact('withdraws'));
    }

    // public function paid($id)
    // {
    //     DB::transaction(function () use ($id) {

    //         $withdraw = WithdrawRequest::with('vendor.user.wallet')->findOrFail($id);

    //         if ($withdraw->status !== 'pending') {
    //             abort(400, 'Withdraw sudah diproses');
    //         }

    //         $wallet = $withdraw->vendor->user->wallet;

    //         if (!$wallet) {
    //             abort(400, 'Wallet tidak ditemukan');
    //         }

    //         // 🔓 Lepaskan pending balance
    //         if ($wallet->pending_balance < $withdraw->withdraw_amount) {
    //             abort(400, 'Pending balance tidak valid');
    //         }

    //         $wallet->decrement('pending_balance', $withdraw->withdraw_amount);

    //         $withdraw->update([
    //             'status' => 'paid'
    //         ]);
    //     });



    // // ✅ KIRIM EMAIL SETELAH TRANSAKSI SUKSES
    // Mail::to($withdraw->vendor->user->email)
    //     ->send(new WithdrawPaidMail($withdraw));
    //     return back()->with('success', 'Withdraw berhasil dibayar');
    // }

public function paid($id)
{
    $withdraw = null; // WAJIB

    DB::transaction(function () use ($id, &$withdraw) {

        $withdraw = WithdrawRequest::with('vendor.user.wallet')
            ->lockForUpdate() // optional tapi bagus
            ->findOrFail($id);

        if ($withdraw->status !== 'pending') {
            abort(400, 'Withdraw sudah diproses');
        }

        $wallet = $withdraw->vendor->user->wallet;

        if (!$wallet) {
            abort(400, 'Wallet tidak ditemukan');
        }

        if ($wallet->pending_balance < $withdraw->withdraw_amount) {
            abort(400, 'Pending balance tidak valid');
        }

        // Kurangi pending
        $wallet->decrement('pending_balance', $withdraw->withdraw_amount);

        $withdraw->update([
            'status' => 'paid'
        ]);
    });

    // 🔐 DOUBLE SAFETY CHECK
    if (!$withdraw) {
        abort(500, 'Withdraw gagal diproses');
    }

    // 📧 EMAIL DI LUAR TRANSACTION
    Mail::to($withdraw->vendor->user->email)
        ->send(new WithdrawPaidMail($withdraw));

    return back()->with('success', 'Withdraw berhasil dibayar');
}


    public function decline($id)
    {
        DB::transaction(function () use ($id) {

            $withdraw = WithdrawRequest::with('vendor.user.wallet')->findOrFail($id);

            if ($withdraw->status !== 'pending') {
                abort(400, 'Withdraw sudah diproses');
            }

            $wallet = $withdraw->vendor->user->wallet;

            // 🔁 Kembalikan saldo
            $wallet->increment('balance', $withdraw->withdraw_amount);
            $wallet->decrement('pending_balance', $withdraw->withdraw_amount);

            $withdraw->update([
                'status' => 'rejected'
            ]);
        });

        return back()->with('success', 'Withdraw ditolak & saldo dikembalikan');
    }
}
