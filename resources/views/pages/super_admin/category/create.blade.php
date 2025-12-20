@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Create Category</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST">
          @csrf

          <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
          </div>

          <div class="form-group">
            <label>Icon</label>
            <input type="file" name="icon" class="form-control">
          </div>

          <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>

          <button class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
