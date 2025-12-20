@extends('layouts.app')

@section('title', 'sub category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>sub category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">sub category</div>
        </div>
    </div>


<div class="card-body">

<div class="form-group">
  <label>Category</label>
  <select class="form-control">
    <option>Electronics</option>
    <option>Fashion</option>
  </select>
</div>

<div class="form-group">
  <label>Sub Category Name</label>
  <input type="text" class="form-control">
</div>

<div class="form-group">
  <label>Slug</label>
  <input type="text" class="form-control">
</div>

<div class="form-group">
  <label>Status</label>
  <select class="form-control">
    <option>Active</option>
    <option>Inactive</option>
  </select>
</div>

</div>
</div>


</div>
</div>
@endsection
