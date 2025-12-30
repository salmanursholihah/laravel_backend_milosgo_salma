<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\FooterGridTwo;
use Illuminate\Http\Request;

class FooterGridTwoController extends Controller
{
    public function index()
{
    $footerGridTwo = FooterGridTwo::latest()->get();

    return view(
        'pages.super_admin.footer_grid_two.index',
        compact('footerGridTwo')
    );
}


    public function create()
    {
        return view('pages.super_admin.footer_grid_two.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'url'    => 'required|url',
            'status' => 'required|boolean',
        ]);

        FooterGridTwo::create($request->all());

        return redirect()
            ->route('super_admin.footer_grid_two.index')
            ->with('success', 'Footer grid two created');
    }

    public function edit(FooterGridTwo $footerGridTwo)
    {
        return view(
            'pages.super_admin.footer_grid_two.edit',
            compact('footerGridTwo')
        );
    }

    public function update(Request $request, FooterGridTwo $footerGridTwo)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'url'    => 'required|url',
            'status' => 'required|boolean',
        ]);

        $footerGridTwo->update($request->all());

        return redirect()
            ->route('super_admin.footer_grid_two.index')
            ->with('success', 'Footer grid two updated');
    }

    public function destroy(FooterGridTwo $footerGridTwo)
    {
        $footerGridTwo->delete();
        return back()->with('success', 'Footer grid two deleted');
    }
}
