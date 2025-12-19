@extends('layouts.app')

@section('title', ' Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1> Orders</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">user</div>
            <div class="breadcrumb-item active">Orders</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Order List</h4>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Invoice</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Qty</th>
            <th>Amount</th>
            <th>Order Status</th>
            <th>Payment Status</th>
            <th>Payment Method</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>#INV-001</td>
            <td>John Doe</td>
            <td>2025-01-01</td>
            <td>3</td>
            <td>Rp150.000</td>
            <td><span class="badge badge-warning">Pending</span></td>
            <td><span class="badge badge-success">Paid</span></td>
            <td>Transfer</td>
            <td>
                <a href="#" class="btn btn-sm btn-info">View</a>
            </td>
        </tr>
    </tbody>
</table>

        </div>
    </div>
</section>
@endsection
