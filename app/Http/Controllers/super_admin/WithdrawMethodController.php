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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.super_admin.withdraw_method.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'min_amount' => 'required|numeric|min:0',
            'max_amount' => 'required|numeric|gte:min_amount',
            'charge'     => 'required|numeric|min:0',
            'status'     => 'required|boolean',
        ]);

        WithdrawMethod::create($request->all());

        return redirect()
            ->route('super_admin.withdraw_method.index')
            ->with('success', 'Withdraw method berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $method = WithdrawMethod::findOrFail($id);
        return view('pages.super_admin.withdraw_method.edit', compact('method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'min_amount' => 'required|numeric|min:0',
            'max_amount' => 'required|numeric|gte:min_amount',
            'charge'     => 'required|numeric|min:0',
            'status'     => 'required|boolean',
        ]);

        $method = WithdrawMethod::findOrFail($id);
        $method->update($request->all());

        return redirect()
            ->route('super_admin.withdraw_method.index')
            ->with('success', 'Withdraw method berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        WithdrawMethod::findOrFail($id)->delete();

        return back()->with('success', 'Withdraw method berhasil dihapus');
    }

}
