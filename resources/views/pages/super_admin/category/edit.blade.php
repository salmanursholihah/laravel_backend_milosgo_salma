@extends('layouts.app')

@section('title', 'Edit Category')

@section('main')
<section class="section">

    {{-- HEADER --}}
    <div class="section-header">
        <h1>Edit Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Edit Category</div>
        </div>
    </div>

    {{-- BODY --}}
    <div class="section-body">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('super_admin.categories.update', $category->id) }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- CATEGORY NAME --}}
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', $category->name) }}"
                               required>
                    </div>

                    {{-- SLUG --}}
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text"
                               name="slug"
                               class="form-control"
                               value="{{ old('slug', $category->slug) }}">
                    </div>

                    {{-- ICON --}}
                    <div class="form-group">
                        <label>Icon</label><br>

                        @if($category->icon)
                            <img src="{{ asset('storage/'.$category->icon) }}"
                                 width="60"
                                 class="mb-2 rounded">
                        @endif

                        <input type="file"
                               name="icon"
                               class="form-control mt-2">
                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti icon
                        </small>
                    </div>

                    {{-- STATUS --}}
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>
                                Inactive
                            </option>
                        </select>
                    </div>

                    {{-- ACTION --}}
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Update
                    </button>

                    <a href="{{ route('super_admin.categories.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>
        </div>
    </div>

</section>
@endsection
