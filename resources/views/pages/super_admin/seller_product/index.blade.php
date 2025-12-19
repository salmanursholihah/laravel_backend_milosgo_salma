@extends('layouts.app')
@section('title','Seller Products')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Seller Products</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Product List</h4>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vendor</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Approved</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Vendor A</td>
                            <td><img src="https://via.placeholder.com/50" class="rounded"></td>
                            <td>Gaming Laptop</td>
                            <td>Rp 15.000.000</td>
                            <td>Physical</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td><span class="badge badge-info">Yes</span></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
