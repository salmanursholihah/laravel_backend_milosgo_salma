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
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Product
                    </button>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="https://via.placeholder.com/60" class="rounded">
                            </td>
                            <td>iPhone 15</td>
                            <td>Rp 15.000.000</td>
                            <td>
                                <span class="badge badge-primary">Physical</span>
                            </td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
