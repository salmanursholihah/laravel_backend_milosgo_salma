<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WithdrawMethod;

class WithdrawMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $methods = WithdrawMethod::latest()->get();
        return view('pages.super_admin.withdraw_method.index', compact('methods'));
    }

    public function create()
    {
        return view('pages.super_admin.withdraw_method.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'minimum_amount' => 'required|numeric',
            'maximum_amount' => 'required|numeric',
            'withdraw_charge' => 'required|numeric',
        ]);

        WithdrawMethod::create($request->all());
        return redirect()->route('super_admin.withdraw-methods.index');
    }

    // public function edit($id)
    // {
    //     $method = WithdrawMethod::findOrFail($id);
    //     return view('pages.super_admin.withdraw_method.edit', compact('method'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $method = WithdrawMethod::findOrFail($id);
    //     $method->update($request->all());
    //     return redirect()->route('super_admin.withdraw-methods.index');
    // }


    public function edit($id)
    {
        $method = WithdrawMethod::findOrFail($id);
        return view('pages.super_admin.withdraw_method.edit', compact('method'));
    }
    public function update(Request $request, $id)
    {
        $method = WithdrawMethod::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'minimum_amount' => 'required|numeric',
            'maximum_amount' => 'required|numeric',
            'charge' => 'required|numeric',
        ]);

        $method->update([
            'name' => $request->name,
            'minimum_amount' => $request->minimum_amount,
            'maximum_amount' => $request->maximum_amount,
            'charge' => $request->charge,
        ]);

        return redirect()->route('super_admin.withdraw-methods.index');
    }
}
