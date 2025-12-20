@extends('layouts.app')
@section('title','Products')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Products</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Product List</h4>
                <div class="card-header-action">
                <a href="{{ route('super_admin.product.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Product</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Approve</th>
            <th>Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>
                <img src="{{ asset('images/product.png') }}" width="50">
            </td>
            <td>Product A</td>
            <td>Rp50.000</td>
            <td><span class="badge badge-success">Approved</span></td>
            <td>Physical</td>
            <td><span class="badge badge-primary">Active</span></td>
            <td>
                <a href="{{ route('seller.products.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
       </div>
    </div>
</section>
@endsection

