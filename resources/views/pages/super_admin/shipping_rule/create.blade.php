@extends('layouts.app')

@section('title', 'shiping_rule')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>shiping_rule</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">shiping_rule</div>
        </div>
    </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">

        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label>Type</label>
          <select class="form-control">
            <option>Flat Cost</option>
            <option>Per Product</option>
            <option>Free Shipping</option>
          </select>
        </div>

        <div class="form-group">
          <label>Cost</label>
          <input type="number" class="form-control">
        </div>

        <div class="form-group">
          <label>Status</label>
          <select class="form-control">
            <option>Active</option>
            <option>Inactive</option>
          </select>
        </div>

      </div>

      <div class="card-footer text-left">
        <button class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</section>


</div>
</div>
@endsection
