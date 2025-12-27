@extends('layouts.app')

@section('title', 'Edit Sub Category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Edit Sub Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Sub Category</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Sub Category</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('super_admin.sub_category.update', $subCategory->id) }}"
                      method="POST">
                    @csrf
                    @method('PUT')

                    {{-- CATEGORY --}}
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $subCategory->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- SUB CATEGORY NAME --}}
                    <div class="form-group">
                        <label>Sub Category Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', $subCategory->name) }}"
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
                               value="{{ old('slug', $subCategory->slug) }}"
                               required>
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- STATUS --}}
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $subCategory->status == 1 ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="0" {{ $subCategory->status == 0 ? 'selected' : '' }}>
                                Inactive
                            </option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- BUTTON --}}
                    <div class="form-group text-right">
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Sub Category
                        </button>

                        <a href="{{ route('super_admin.sub_category.index') }}"
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
