@extends('layouts.app')

@section('title', 'Canceled Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Canceled Orders</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Invoice</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#5</td>
                            <td>INV-2025005</td>
                            <td>Anna</td>
                            <td>15 Dec 2025</td>
                            <td>4</td>
                            <td>$160</td>
                            <td><span class="badge badge-danger">Canceled</span></td>
                            <td><span class="badge badge-danger">Refunded</span></td>
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
</section>
@endsection
