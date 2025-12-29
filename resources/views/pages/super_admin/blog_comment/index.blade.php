@extends('layouts.app')
@section('title', 'Blog Comments')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Blog Comments</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body p-0">
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Post</th>
            <th>User</th>
            <th>Comment</th>
            <th>Status</th>
            <th width="12%">Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($comments as $c)
            <tr>
                <td>{{ $c->id }}</td>

                <td>{{ $c->blog->title ?? '-' }}</td>

                <td>{{ $c->user->name ?? 'Guest' }}</td>

                <td>{{ $c->comment }}</td>

                <td>
                    <span class="badge badge-{{ $c->status == 'approved' ? 'success' : 'warning' }}">
                        {{ ucfirst($c->status) }}
                    </span>
                </td>

                <td>
                    @if ($c->status == 'pending')
                        <a href="{{ route('super_admin.blog-comment.approve', $c->id) }}"
                           class="btn btn-success btn-sm">
                            Approve
                        </a>
                    @endif

                    <form action="{{ route('super_admin.blog-comment.destroy', $c->id) }}"
                          method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this comment?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">
                    No comments found
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
                </div>
            </div>
        </div>
    </section>
@endsection
