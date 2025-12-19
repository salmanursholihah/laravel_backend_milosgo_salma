@extends('layouts.app')

@section('title', 'Out For Delivery')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Out For Delivery</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Invoice</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Amount</th>
                            <th>Order Status</th>
                            <th>Payment Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#3</td>
                            <td>INV-2025003</td>
                            <td>18 Dec 2025</td>
                            <td>5</td>
                            <td>$210</td>
                            <td><span class="badge badge-primary">Out for Delivery</span></td>
                            <td>COD</td>
                            <td>
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
