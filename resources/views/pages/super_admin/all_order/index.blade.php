@extends('layouts.app')
@section('title','All Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>All Orders</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Order List</h4>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
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
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>#INV-1001</td>
                            <td>Salma</td>
                            <td>18 Dec 2025</td>
                            <td>2</td>
                            <td>Rp 2.500.000</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td>Transfer</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
