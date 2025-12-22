@extends('layouts.app')

@section('title', 'Category Management')

@section('main')
<section class="section">

    {{-- SECTION HEADER --}}
    <div class="section-header">
        <h1>Category Management</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </div>
            <div class="breadcrumb-item active">Categories</div>
        </div>
    </div>

    {{-- SECTION BODY --}}
    <div class="section-body">
        <div class="row">

            {{-- LEFT : CATEGORY LIST --}}
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Category List</h4>
                        <div class="card-header-action">
                            <a href="{{ route('super_admin.categories.index') }}" class="btn btn-primary">
                                <i class="fas fa-sync"></i> Refresh
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th class="text-center" width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                @if ($category->icon)
                                                    <img src="{{ asset('storage/'.$category->icon) }}"
                                                         width="40"
                                                         class="img-thumbnail">
                                                @else
                                                    <span class="text-muted">No Icon</span>
                                                @endif
                                            </td>

                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>

                                            <td>
                                                <span class="badge badge-{{ $category->status ? 'success' : 'secondary' }}">
                                                    {{ $category->status ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <a href="{{ route('super_admin.categories.edit', $category->id) }}"
                                                   class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <form action="{{ route('super_admin.categories.destroy', $category->id) }}"
                                                      method="POST"
                                                      class="d-inline"
                                                      onsubmit="return confirm('Delete this category?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">
                                                No categories found
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT : CREATE CATEGORY --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Category</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('super_admin.categories.store') }}"
                              method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Category Icon</label>
                                <input type="file"
                                       name="icon"
                                       class="form-control"
                                       accept="image/*">
                            </div>

                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name') }}"
                                       class="form-control"
                                       placeholder="Enter category name"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text"
                                       name="slug"
                                       value="{{ old('slug') }}"
                                       class="form-control"
                                       placeholder="example: electronics"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <button class="btn btn-primary btn-block">
                                <i class="fas fa-plus"></i> Create Category
                            </button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
@endsection
