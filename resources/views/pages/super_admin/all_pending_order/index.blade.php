@extends('layouts.app')
@section('title','Pending Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Pending Orders</h1>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped table-md">
                <thead>
                    <tr>
                        <th>Invoice</th>
                        <th>Customer</th>
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
                        <td>#INV-2002</td>
                        <td>Budi</td>
                        <td>18 Dec 2025</td>
                        <td>1</td>
                        <td>Rp 900.000</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td><span class="badge badge-danger">Unpaid</span></td>
                        <td>COD</td>
                        <td>
                            <button class="btn btn-sm btn-info">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
