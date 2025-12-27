<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::with('category')
            ->latest()
            ->get();

        $categories = Category::where('status', 1)->get();

        return view('pages.super_admin.sub_category.index', compact('subCategories', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name'        => 'required|string|max:255',
            'slug'        => 'nullable|string|max:255|unique:sub_categories,slug',
            'status'      => 'required|boolean',
        ]);

        $slug = $request->slug
            ? Str::slug($request->slug)
            : Str::slug($request->name);

        SubCategory::create([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => $slug,
            'status'      => $request->status,
        ]);

        return redirect()->back()->with('success', 'Sub Category created successfully');
    }
       public function create()
    {
        $categories = \App\Models\Category::where('status', 1)->get();

        return view('pages.super_admin.sub_category.create', compact('categories'));
    }


    // public function edit(SubCategory $subCategory)
    // {
    //     $categories = Category::where('status', 1)->get();

    //     return view('pages.super_admin.sub_category.edit', compact('subCategory', 'categories'));
    // }

    // public function update(Request $request, SubCategory $subCategory)
    // {
    //     $request->validate([
    //         'category_id' => 'required',
    //         'name'        => 'required|string|max:255',
    //         'slug'        => 'nullable|string|max:255|unique:sub_categories,slug,' . $subCategory->id,
    //         'status'      => 'required|boolean',
    //     ]);

    //     $slug = $request->slug
    //         ? Str::slug($request->slug)
    //         : Str::slug($request->name);

    //     $subCategory->update([
    //         'category_id' => $request->category_id,
    //         'name'        => $request->name,
    //         'slug'        => $slug,
    //         'status'      => $request->status,
    //     ]);

    //     return redirect()->route('sub-categories.index')
    //         ->with('success', 'Sub Category updated successfully');
    // }


    public function edit(SubCategory $subCategory)
{
    $categories = Category::where('status', 1)->get();

    return view('pages.super_admin.sub_category.edit', compact(
        'subCategory',
        'categories'
    ));
}

public function update(Request $request, SubCategory $subCategory)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name'        => 'required|string|max:255',
        'slug'        => 'required|string|unique:sub_categories,slug,' . $subCategory->id,
        'status'      => 'required|boolean',
    ]);

    $subCategory->update([
        'category_id' => $request->category_id,
        'name'        => $request->name,
        'slug'        => $request->slug,
        'status'      => $request->status,
    ]);

    return redirect()
        ->route('super_admin.sub_category.index')
        ->with('success', 'Sub Category berhasil diperbarui');
}

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();

        return redirect()->back()->with('success', 'Sub Category deleted successfully');
    }
}
