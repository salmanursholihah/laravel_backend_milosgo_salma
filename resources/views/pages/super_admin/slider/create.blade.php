@extends('layouts.app')

@section('title', 'slider')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>slider</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">slider</div>
        </div>
    </div>


<div class="card-body">

<div class="form-group">
  <label>Banner</label>
  <input type="file" class="form-control">
</div>

<div class="form-group">
  <label>Type</label>
  <input type="text" class="form-control">
</div>

<div class="form-group">
  <label>Title</label>
  <input type="text" class="form-control">
</div>

<div class="form-group">
  <label>Starting Price</label>
  <input type="text" class="form-control">
</div>

<div class="form-group">
  <label>Button URL</label>
  <input type="text" class="form-control">
</div>

<div class="form-group">
  <label>Serial</label>
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
</div>

</div>
<div>
    @endsection
