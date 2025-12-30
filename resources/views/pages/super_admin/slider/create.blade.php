@extends('layouts.app')

@section('title', 'Create Slider')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Create Slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">E-Commerce</div>
                <div class="breadcrumb-item active">Slider</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('super_admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" class="form-control" value="{{ old('type') }}">
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>

                        <div class="form-group">
                            <label>Starting Price</label>
                            <input type="text" name="starting_price" class="form-control"
                                value="{{ old('starting_price') }}">
                        </div>

                        <div class="form-group">
                            <label>Button URL</label>
                            <input type="text" name="btn_url" class="form-control" value="{{ old('btn_url') }}">
                        </div>

                        <div class="form-group">
                            <label>Serial</label>
                            <input type="number" name="serial" class="form-control" value="{{ old('serial') }}">
                        </div>
                        <div class="form-group">
                            <label for="slider image">Images</label>
                            <input type="file" name="images[]" class="form-control" multiple accept="image/*"
                                id="slider image">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i> Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
