@extends('layouts.app')

@section('title', 'blog category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>blog category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">blog category</div>
        </div>
    </div>


  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="#" method="POST">
          @csrf

          <div class="form-group">
            <label>image</label>
            <input type="text" name="image" class="form-control" required>
          </div>

          <div class="form-group">
            <label>title</label>
            <input type="text" name="title" class="form-control">
          </div>

          <div class="form-group">
            <label>category</label>
            <input type="text" name="category" class="form-control">
          </div>
          <div class="form-group">
            <label>deskripsi</label>
            <input type="text" name="deskripsi" class="form-control">
          </div>
          <div class="form-group">
            <label>seo title</label>
            <input type="text" name="seo_title" class="form-control">
          </div>
          <div class="form-group">
            <label>seo deskripsi</label>
            <input type="text" name="seo_deskripsi" class="form-control">
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

</div>
</div>
@endsection
