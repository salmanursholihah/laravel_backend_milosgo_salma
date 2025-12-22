<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
   public function index()
{
    $blogs = Blog::with('blogCategory')->latest()->get();
    return view('pages.super_admin.blogs.index', compact('blogs'));
}


    public function create()
    {
        $categories = BlogCategory::where('status', 1)->get();
        return view('pages.super_admin.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_category_id' => 'required|exists:blog_categories,id',
            'title'            => 'required|string|max:255',
            'slug'             => 'required|unique:blogs,slug',
            'description'      => 'required',
            'image'            => 'nullable|image',
            'seo_title'        => 'nullable|string',
            'seo_description'  => 'nullable|string',
            'status'           => 'required|boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'blog_category_id' => $request->blog_category_id,
            'title'            => $request->title,
            'slug'             => $request->slug,
            'description'      => $request->description,
            'image'            => $imagePath,
            'seo_title'        => $request->seo_title,
            'seo_description'  => $request->seo_description,
            'status'           => $request->status,
        ]);

        return redirect()->route('super_admin.blogs.index')
            ->with('success', 'Blog created successfully');
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::where('status', 1)->get();
        return view('pages.super_admin.blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'blog_category_id' => 'required|exists:blog_categories,id',
            'title'            => 'required|string|max:255',
            'slug'             => 'required|unique:blogs,slug,' . $blog->id,
            'description'      => 'required',
            'image'            => 'nullable|image',
            'status'           => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($request->except('image') + ['image' => $blog->image]);

        return redirect()->route('super_admin.blogs.index')
            ->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();
        return back()->with('success', 'Blog deleted');
    }
}
