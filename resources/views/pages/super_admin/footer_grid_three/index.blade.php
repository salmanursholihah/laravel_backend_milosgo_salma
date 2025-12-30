@extends('layouts.app')
@section('title','Footer Section Three')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Footer Section Three</h1>

        <div class="section-header-button">
            <a href="{{ route('super_admin.footer_grid_three.create') }}"
               class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($footerGridThree as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ $item->url }}" target="_blank">
                                    {{ Str::limit($item->url, 30) }}
                                </a>
                            </td>
                            <td>
                                @if($item->status)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('super_admin.footer_grid_three.edit', $item->id) }}"
                                   class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('super_admin.footer_grid_three.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Delete this item?')">
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
                            <td colspan="5" class="text-center text-muted">
                                No data found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
