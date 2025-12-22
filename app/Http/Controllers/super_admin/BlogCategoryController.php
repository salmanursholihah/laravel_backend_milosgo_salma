<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::latest()->get();
        return view('pages.super_admin.blog_category.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.super_admin.blog_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'slug'   => 'required|string|unique:blog_categories,slug',
            'status' => 'required|boolean',
        ]);

        BlogCategory::create($request->only('name', 'slug', 'status'));

        return redirect()->route('super_admin.blog_category.index')
            ->with('success', 'Blog category created successfully');
    }

    public function edit(BlogCategory $blogCategory)
    {
        return view('pages.super_admin.blog_category.edit', compact('blogCategory'));
    }

    public function update(Request $request, BlogCategory $blogCategory)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'slug'   => 'required|string|unique:blog_categories,slug,' . $blogCategory->id,
            'status' => 'required|boolean',
        ]);

        $blogCategory->update($request->only('name', 'slug', 'status'));

        return redirect()->route('super_admin.blog_category.index')
            ->with('success', 'Blog category updated successfully');
    }

    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        return back()->with('success', 'Blog category deleted');
    }
}
