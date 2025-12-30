@extends('layouts.app')
@section('title','Footer Socials')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Footer Socials</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Social Media</h4>
                <a href="{{ route('super_admin.footer_social.create') }}"
                   class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Social
                </a>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($socials as $social)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><i class="{{ $social->icon }}"></i></td>
                            <td>{{ $social->name }}</td>
                            <td>{{ $social->url }}</td>
                            <td>
                                @if($social->status)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('super_admin.footer_social.destroy', $social->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this social?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                                <a href="{{ route('super_admin.footer_social.edit', $social->id) }}"
                                   class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                No social media found
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
