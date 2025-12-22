@extends('layouts.app')

@section('title', 'Create Child Category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Child Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Child Category</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Add New Child Category</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('super_admin.child_category.store') }}" method="POST">
                    @csrf

                    {{-- CATEGORY --}}
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- SUB CATEGORY --}}
                    <div class="form-group">
                        <label>Sub Category</label>
                        <select name="sub_category_id" class="form-control" required>
                            <option value="">-- Select Sub Category --</option>
                            @foreach ($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}">
                                    {{ $subCategory->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('sub_category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- CHILD CATEGORY NAME --}}
                    <div class="form-group">
                        <label>Child Category Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Enter child category name"
                               required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- SLUG --}}
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text"
                               name="slug"
                               class="form-control"
                               value="{{ old('slug') }}"
                               placeholder="child-category-slug"
                               required>
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- STATUS --}}
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- BUTTON --}}
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Child Category
                        </button>
                        <a href="{{ route('super_admin.child_category.index') }}"
                           class="btn btn-secondary">
                            Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
