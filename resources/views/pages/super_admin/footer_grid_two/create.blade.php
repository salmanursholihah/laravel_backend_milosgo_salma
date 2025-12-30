@extends('layouts.app')

@section('title','Create Footer Grid Two')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Footer Grid Two</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('super_admin.footer_grid_two.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Link Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>URL</label>
                        <input type="url" name="url" class="form-control" required>
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

                    <a href="{{ route('super_admin.footer_grid_two.index') }}"
                       class="btn btn-secondary">Back</a>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
