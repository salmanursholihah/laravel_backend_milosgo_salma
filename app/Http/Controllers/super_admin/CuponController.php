<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Cupon;
use Illuminate\Http\Request;

class CuponController extends Controller
{
    public function index()
    {
        $cupons = Cupon::latest()->get();
        return view('pages.super_admin.cupon.index', compact('cupons'));
    }

    public function create()
    {
        return view('pages.super_admin.cupon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'code'          => 'required|unique:cupons,code',
            'quantity'      => 'required|integer',
            'max_use'       => 'required|integer',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after:start_date',
            'discount_type' => 'required|string',
            'discount'      => 'required|numeric',
            'total'         => 'required|integer',
            'status'        => 'required|boolean',
        ]);

        Cupon::create($request->all());

        return redirect()->route('super_admin.cupons.index')
            ->with('success', 'Cupon created successfully');
    }

    public function destroy(Cupon $cupon)
    {
        $cupon->delete();
        return back()->with('success', 'Cupon deleted');
    }
}
