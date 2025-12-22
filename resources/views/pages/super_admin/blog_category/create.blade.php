@extends('layouts.app')

@section('title', 'Create Blog Category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Blog Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Blog Category</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <form action="{{ route('super_admin.blog_category.store') }}"
                  method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text"
                               name="slug"
                               class="form-control"
                               placeholder="auto-generate if empty">
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
                    <a href="{{ route('super_admin.blog_category.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
