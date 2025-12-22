<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
      public function index()
    {
        $categories = Category::latest()->get();
        return view('pages.super_admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'slug'   => 'required|string|max:255|unique:categories,slug',
            'status' => 'required|boolean',
            'icon'   => 'nullable|image|mimes:png,jpg,jpeg,svg',
        ]);

        $iconPath = null;

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('categories', 'public');
        }

        Category::create([
            'name'   => $request->name,
            'status' => $request->status,
            'slug'   => $request->slug,
            'icon'   => $iconPath,
        ]);

        return redirect()->back()->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('pages.super_admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'slug'   => 'required|string|max:255|unique:categories,slug,' . $category->id,
            'status' => 'required|boolean',
            'icon'   => 'nullable|image|mimes:png,jpg,jpeg,svg',
        ]);

        if ($request->hasFile('icon')) {
            if ($category->icon && Storage::disk('public')->exists($category->icon)) {
                Storage::disk('public')->delete($category->icon);
            }

            $category->icon = $request->file('icon')->store('categories', 'public');
        }

        $category->update([
            'name'   => $request->name,
            'slug'   => $request->slug,
            'status' => $request->status,
            'icon'   => $category->icon,
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        if ($category->icon && Storage::disk('public')->exists($category->icon)) {
            Storage::disk('public')->delete($category->icon);
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted');
    }

}
