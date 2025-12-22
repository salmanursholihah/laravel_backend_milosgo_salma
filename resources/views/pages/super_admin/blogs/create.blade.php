@extends('layouts.app')

@section('title', 'Create Blog')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Blog</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Blogs</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <form action="{{ route('super_admin.blogs.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Blog Category</label>
                        <select name="blog_category_id" class="form-control" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text"
                               name="slug"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="4"
                                  required></textarea>
                    </div>

                    <div class="form-group">
                        <label>SEO Title</label>
                        <input type="text"
                               name="seo_title"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label>SEO Description</label>
                        <textarea name="seo_description"
                                  class="form-control"
                                  rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                </div>

                <div class="card-footer text-right">
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Save
                    </button>
                    <a href="{{ route('super_admin.blogs.index') }}"
                       class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
