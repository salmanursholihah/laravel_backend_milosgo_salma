<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestToVendor;

class UserRequestToVendorController extends Controller
{

    public function index(){
        return view('pages.user.request_to_be_vendor.index');
    }

    public function store(Request $request)
    {
        // Cegah double request
        $exists = RequestToVendor::where('user_id', auth()->id())
                    ->where('status','pending')
                    ->exists();

        if ($exists) {
            return back()->with('error','Request vendor masih pending');
        }

        $request->validate([
            'shop_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        RequestToVendor::create([
            'user_id'   => auth()->id(),
            'shop_name' => $request->shop_name,
            'phone'     => $request->phone,
            'address'   => $request->address,
            'status'    => 'pending', // 🔴 PENTING
        ]);

        return redirect()->back()->with('success','Request berhasil dikirim');
    }
    
}



