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

<form action="{{ route('seller.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">Save</button>
</form>



</div>
</div>
@endsection


