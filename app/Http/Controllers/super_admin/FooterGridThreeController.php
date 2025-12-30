<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\FooterGridThree;
use Illuminate\Http\Request;

class FooterGridThreeController extends Controller
{
    public function index()
    {
        $footerGridThree = FooterGridThree::latest()->get();
        return view('pages.super_admin.footer_grid_three.index', compact('footerGridThree'));
    }

    public function create()
    {
        return view('pages.super_admin.footer_grid_three.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'url'    => 'required|url',
            'status' => 'required|boolean',
        ]);

        FooterGridThree::create($request->all());

        return redirect()
            ->route('super_admin.footer_grid_three.index')
            ->with('success', 'Footer grid three created');
    }

    public function edit(FooterGridThree $footerGridThree)
    {
        return view(
            'pages.super_admin.footer_grid_three.edit',
            compact('footerGridThree')
        );
    }

    public function update(Request $request, FooterGridThree $footerGridThree)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'url'    => 'required|url',
            'status' => 'required|boolean',
        ]);

        $footerGridThree->update($request->all());

        return redirect()
            ->route('super_admin.footer_grid_three.index')
            ->with('success', 'Footer grid three updated');
    }

    public function destroy(FooterGridThree $footerGridThree)
    {
        $footerGridThree->delete();
        return back()->with('success', 'Footer grid three deleted');
    }
}
