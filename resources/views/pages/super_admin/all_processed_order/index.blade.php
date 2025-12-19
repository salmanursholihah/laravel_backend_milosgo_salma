@extends('layouts.app')
@section('title','Processed Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Processed Orders</h1>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover table-md">
                <thead>
                    <tr>
                        <th>Invoice</th>
                        <th>Date</th>
                        <th>Product Qty</th>
                        <th>Amount</th>
                        <th>Order Status</th>
                        <th>Payment Status</th>
                        <th>Payment Method</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#INV-3003</td>
                        <td>17 Dec 2025</td>
                        <td>3</td>
                        <td>Rp 5.000.000</td>
                        <td><span class="badge badge-primary">Processed</span></td>
                        <td><span class="badge badge-success">Paid</span></td>
                        <td>VA</td>
                        <td>
                            <button class="btn btn-sm btn-success">Ship</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
