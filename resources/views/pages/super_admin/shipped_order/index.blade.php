@extends('layouts.app')

@section('title', 'Shipped Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Shipped Orders</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover">
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
                                <td>#2</td>
                                <td>INV-2025002</td>
                                <td>Sarah Lee</td>
                                <td>17 Dec 2025</td>
                                <td>2</td>
                                <td>$85</td>
                                <td><span class="badge badge-info">Shipped</span></td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>Credit Card</td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
