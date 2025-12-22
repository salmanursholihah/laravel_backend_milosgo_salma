@extends('layouts.app')

@section('title', 'Blogs')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Blogs</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Blogs</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Blog List</h4>
                <div class="card-header-action">
                    <a href="{{ route('super_admin.blogs.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Blog
                    </a>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Publish Date</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>
                                        @if($blog->image)
                                            <img src="{{ asset('storage/'.$blog->image) }}" width="60">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->category->name ?? '-' }}</td>
                                    <td>
                                        <span class="badge badge-{{ $blog->status ? 'success' : 'secondary' }}">
                                            {{ $blog->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <form action="{{ route('super_admin.blogs.destroy', $blog->id) }}"
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this blog?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('super_admin.blogs.edit', $blog->id) }}"
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">
                                        No blogs found
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
