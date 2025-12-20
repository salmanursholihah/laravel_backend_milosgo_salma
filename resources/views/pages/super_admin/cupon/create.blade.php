@extends('layouts.app')

@section('title', 'Coupons')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Coupons</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Coupons</div>
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
          <label>Code</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label>Quantity</label>
          <input type="number" class="form-control">
        </div>

        <div class="form-group">
          <label>Max Use Per Person</label>
          <input type="number" class="form-control">
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Start Date</label>
              <input type="date" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>End Date</label>
              <input type="date" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Discount Type</label>
              <select class="form-control">
                <option>Percentage (%)</option>
                <option>Fixed Amount</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Discount Value</label>
              <input type="number" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Status</label>
          <select class="form-control">
            <option>Active</option>
            <option>Inactive</option>
          </select>
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
</section>
@endsection
