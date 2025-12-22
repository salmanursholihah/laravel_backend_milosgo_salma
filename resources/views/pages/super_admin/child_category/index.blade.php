@extends('layouts.app')
@section('title', 'Child Category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Child Categories</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Child Category List</h4>
                <div class="card-header-action">
                    <a href="{{ route('super_admin.child_category.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Child Category
                    </a>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($childCategories as $child)
                                <tr>
                                    <td>{{ $child->id }}</td>
                                    <td>{{ $child->name }}</td>
                                    <td>{{ $child->slug }}</td>
                                    <td>{{ $child->category->name ?? '-' }}</td>
                                    <td>{{ $child->subCategory->name ?? '-' }}</td>
                                    <td>
                                        <span class="badge badge-{{ $child->status ? 'success' : 'secondary' }}">
                                            {{ $child->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('super_admin.child_category.destroy', $child->id) }}"
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this data?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('super_admin.child_category.edit', $child->id) }}"
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">
                                        No child categories found
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
