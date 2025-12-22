@extends('layouts.app')

@section('title', 'Edit Slider')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Edit Slider</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item">
                <a href="{{ route('super_admin.slider.index') }}">Slider</a>
            </div>
            <div class="breadcrumb-item active">Edit</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Update Slider</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('super_admin.slider.update', $slider->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- TYPE --}}
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text"
                               name="type"
                               class="form-control"
                               value="{{ old('type', $slider->type) }}">
                    </div>

                    {{-- TITLE --}}
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ old('title', $slider->title) }}">
                    </div>

                    {{-- STARTING PRICE --}}
                    <div class="form-group">
                        <label>Starting Price</label>
                        <input type="text"
                               name="starting_price"
                               class="form-control"
                               value="{{ old('starting_price', $slider->starting_price) }}">
                    </div>

                    {{-- BUTTON URL --}}
                    <div class="form-group">
                        <label>Button URL</label>
                        <input type="text"
                               name="btn_url"
                               class="form-control"
                               value="{{ old('btn_url', $slider->btn_url) }}">
                    </div>

                    {{-- SERIAL --}}
                    <div class="form-group">
                        <label>Serial</label>
                        <input type="number"
                               name="serial"
                               class="form-control"
                               value="{{ old('serial', $slider->serial) }}">
                    </div>

                    {{-- STATUS --}}
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ old('status', $slider->status) == 1 ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="0" {{ old('status', $slider->status) == 0 ? 'selected' : '' }}>
                                Inactive
                            </option>
                        </select>
                    </div>

                    {{-- BUTTON --}}
                    <div class="form-group text-right">
                        <a href="{{ route('super_admin.slider.index') }}" class="btn btn-secondary">
                            Back
                        </a>
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
