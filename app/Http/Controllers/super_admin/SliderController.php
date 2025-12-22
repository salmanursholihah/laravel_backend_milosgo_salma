<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('serial')->get();
        return view('pages.super_admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('pages.super_admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type'           => 'nullable|string',
            'title'          => 'nullable|string',
            'starting_price' => 'nullable|string',
            'btn_url'        => 'nullable|string',
            'serial'         => 'nullable|integer',
            'status'         => 'required|boolean',
        ]);

        Slider::create($request->all());

        return redirect()->route('super_admin.slider.index')
            ->with('success', 'Slider created successfully');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back()->with('success', 'Slider deleted');
    }


    public function edit(Slider $slider)
    {
        return view('pages.super_admin.slider.edit', compact('slider'));
    }
    public function update(Request $request, Slider $slider)
{
    $request->validate([
        'type'           => 'nullable|string|max:255',
        'title'          => 'nullable|string|max:255',
        'starting_price' => 'nullable|string|max:255',
        'btn_url'        => 'nullable|string|max:255',
        'serial'         => 'nullable|integer',
        'status'         => 'required|boolean',
    ]);

    $slider->update([
        'type'           => $request->type,
        'title'          => $request->title,
        'starting_price' => $request->starting_price,
        'btn_url'        => $request->btn_url,
        'serial'         => $request->serial,
        'status'         => $request->status,
    ]);

    return redirect()
        ->route('super_admin.slider.index')
        ->with('success', 'Slider updated successfully');
}
}
