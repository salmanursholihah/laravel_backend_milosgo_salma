@extends('layouts.app')

@section('title', 'Slider')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Homepage Slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">E-Commerce</div>
                <div class="breadcrumb-item active">Slider</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Slider List</h4>
                    <div class="card-header-action">
                        <a href="{{ route('super_admin.slider.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Slider
                        </a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Serial</th>
                                <th>Status</th>
                                <th>Images</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>{{ $slider->type ?? '-' }}</td>
                                    <td>{{ $slider->title ?? '-' }}</td>
                                    <td>{{ $slider->serial }}</td>

                                    {{-- STATUS --}}
                                    <td>
                                        @if ($slider->status)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-secondary">Inactive</span>
                                        @endif
                                    </td>

                                    {{-- IMAGES --}}
                                    <td>
                                        @if (!empty($slider->images))
                                            @foreach ($slider->images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" width="50"
                                                    class="mr-1 mb-1 rounded" alt="Slider Image">
                                            @endforeach
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    {{-- ACTION --}}
                                    <td>
                                        <form action="{{ route('super_admin.slider.destroy', $slider->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this slider?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('super_admin.slider.edit', $slider->id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No slider found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
