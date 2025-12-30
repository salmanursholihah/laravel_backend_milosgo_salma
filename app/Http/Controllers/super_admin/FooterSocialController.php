<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSocial;
use Illuminate\Http\Request;

class FooterSocialController extends Controller
{
    public function index()
    {
        $socials = FooterSocial::latest()->get();
        return view('pages.super_admin.footer_social.index', compact('socials'));
    }

    public function create()
    {
        return view('pages.super_admin.footer_social.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon'   => 'required|string|max:255',
            'name'   => 'required|string|max:255',
            'url'    => 'required|url',
            'status' => 'required|boolean',
        ]);

        FooterSocial::create($request->all());

        return redirect()
            ->route('super_admin.footer_social.index')
            ->with('success', 'Social link added');
    }

    public function edit(FooterSocial $footerSocial)
    {
        return view('pages.super_admin.footer_social.edit', compact('footerSocial'));
    }

    public function update(Request $request, FooterSocial $footerSocial)
    {
        $request->validate([
            'icon'   => 'required|string|max:255',
            'name'   => 'required|string|max:255',
            'url'    => 'required|url',
            'status' => 'required|boolean',
        ]);

        $footerSocial->update($request->all());

        return redirect()
            ->route('super_admin.footer_social.index')
            ->with('success', 'Social link updated');
    }

    public function destroy(FooterSocial $footerSocial)
    {
        $footerSocial->delete();
        return back()->with('success', 'Social link deleted');
    }
}
