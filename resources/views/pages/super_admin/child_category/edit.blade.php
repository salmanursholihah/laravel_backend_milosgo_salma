@extends('layouts.app')

@section('title', 'child category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>child category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">child category</div>
        </div>
    </div>


<div class="card-body">

<div class="form-group">
  <label>Category</label>
  <select class="form-control"></select>
</div>

<div class="form-group">
  <label>Sub Category</label>
  <select class="form-control"></select>
</div>

<div class="form-group">
  <label>Child Category Name</label>
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

<div class="form-group">
  <label></label>
  <input type="submit" class="btn btn-primary">
</div>
</div>
</div>

</div>
@endsection
