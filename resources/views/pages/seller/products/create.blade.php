@extends('layouts.app')

@section('title', 'product')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>product</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">product</div>
        </div>
    </div>


  <div class="section-body">
    <div class="card">
      <div class="card-body">

        <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control">
        </div>

        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control">
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Category</label>
              <select class="form-control"></select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Sub Category</label>
              <select class="form-control"></select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Child Category</label>
              <select class="form-control"></select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Brand</label>
          <select class="form-control"></select>
        </div>

        <div class="form-group">
          <label>SKU</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label>Price</label>
          <input type="number" class="form-control">
        </div>

        <div class="form-group">
          <label>Offer Price</label>
          <input type="number" class="form-control">
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Offer Start Date</label>
              <input type="date" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Offer End Date</label>
              <input type="date" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Stock Quantity</label>
          <input type="number" class="form-control">
        </div>

        <div class="form-group">
          <label>Video Link</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label>Short Description</label>
          <textarea class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label>Long Description</label>
          <textarea class="summernote"></textarea>
        </div>

      </div>

      <div class="card-footer">
        <button class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</section>

</div>
</div>
@endsection
