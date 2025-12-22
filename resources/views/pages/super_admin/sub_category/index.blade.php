@extends('layouts.app')
@section('title', 'Sub Category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Sub Categories</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Sub Category List</h4>
                <div class="card-header-action">
                    <a href="{{ route('super_admin.sub_category.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Sub Category
                    </a>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($subCategories as $sub)
                                <tr>
                                    <td>{{ $sub->id }}</td>
                                    <td>{{ $sub->name }}</td>
                                    <td>{{ $sub->slug }}</td>
                                    <td>{{ $sub->category->name ?? '-' }}</td>
                                    <td>
                                        <span class="badge badge-{{ $sub->status ? 'success' : 'secondary' }}">
                                            {{ $sub->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('super_admin.sub_category.destroy', $sub->id) }}"
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this data?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('super_admin.sub_category.edit', $sub->id) }}"
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">
                                        No sub categories found
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
