<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChildCategoryController extends Controller
{
    public function index()
    {
        $childCategories = ChildCategory::with(['category', 'subCategory'])
            ->latest()
            ->get();

        $categories = Category::where('status', 1)->get();
        $subCategories = SubCategory::where('status', 1)->get();

        return view('pages.super_admin.child_category.index', compact('childCategories', 'categories', 'subCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:child_categories,slug',
            'status' => 'required|boolean',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        ChildCategory::create([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Child Category created successfully');
    }

    public function create()
    {
        $categories = \App\Models\Category::where('status', 1)->get();
        $subCategories = \App\Models\SubCategory::where('status', 1)->get();

        return view('pages.super_admin.child_category.create', compact('categories', 'subCategories'));
    }

public function edit(ChildCategory $childCategory)
{
    $categories = Category::where('status', 1)->get();
    $subCategories = SubCategory::where('status', 1)->get();

    return view('pages.super_admin.child_category.edit', compact(
        'childCategory',
        'categories',
        'subCategories'
    ));
}

public function update(Request $request, ChildCategory $childCategory)
{
    $request->validate([
        'category_id'     => 'required|exists:categories,id',
        'sub_category_id' => 'required|exists:sub_categories,id',
        'name'            => 'required|string|max:255',
        'slug'            => 'required|string|unique:child_categories,slug,' . $childCategory->id,
        'status'          => 'required|boolean',
    ]);

    $childCategory->update([
        'category_id'     => $request->category_id,
        'sub_category_id' => $request->sub_category_id,
        'name'            => $request->name,
        'slug'            => $request->slug,
        'status'          => $request->status,
    ]);

    return redirect()
        ->route('super_admin.child_category.index')
        ->with('success', 'Child Category berhasil diperbarui');
}

    public function destroy(ChildCategory $childCategory)
    {
        $childCategory->delete();

        return redirect()->back()->with('success', 'Child Category deleted successfully');
    }
}
