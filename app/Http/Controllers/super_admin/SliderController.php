<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        'images.*'       => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        'type'           => 'nullable|string',
        'title'          => 'nullable|string',
        'starting_price' => 'nullable|string',
        'btn_url'        => 'nullable|string',
        'serial'         => 'nullable|integer',
        'status'         => 'required|boolean',
        'images'         => 'required|array',
    ]);

    $images = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('sliders', 'public');
            $images[] = $path;
        }
    }

    Slider::create([
        'type'           => $request->type,
        'title'          => $request->title,
        'starting_price' => $request->starting_price,
        'btn_url'        => $request->btn_url,
        'serial'         => $request->serial,
        'status'         => $request->status,
        'images'         => $images,
    ]);

    return redirect()
        ->route('super_admin.slider.index')
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
        'images.*' => 'image|max:2048',
        'status'   => 'required|boolean',
    ]);

    $images = $slider->images ?? [];

    if ($request->hasFile('images')) {

        // ❌ hapus lama (optional)
        foreach ($images as $img) {
            Storage::disk('public')->delete($img);
        }

        $images = [];
        foreach ($request->file('images') as $image) {
            $images[] = $image->store('sliders', 'public');
        }
    }

    $slider->update([
        'type'           => $request->type,
        'title'          => $request->title,
        'starting_price' => $request->starting_price,
        'btn_url'        => $request->btn_url,
        'serial'         => $request->serial,
        'status'         => $request->status,
        'images'         => $images,
    ]);

    return back()->with('success', 'Slider updated');
}
}
