@extends('layouts.app')

@section('title', 'Delivered Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Delivered Orders</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Invoice</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#4</td>
                            <td>INV-2025004</td>
                            <td>Michael</td>
                            <td>16 Dec 2025</td>
                            <td>1</td>
                            <td><span class="badge badge-success">Delivered</span></td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td>E-Wallet</td>
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
