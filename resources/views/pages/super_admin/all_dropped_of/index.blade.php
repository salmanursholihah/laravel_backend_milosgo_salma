@extends('layouts.app')

@section('title', 'Dropped Off Orders')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Dropped Off Orders</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Orders</div>
            <div class="breadcrumb-item active">Dropped Off</div>
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
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- DUMMY DATA --}}
                            <tr>
                                <td>#1</td>
                                <td>INV-2025001</td>
                                <td>John Doe</td>
                                <td>18 Dec 2025</td>
                                <td>3</td>
                                <td>$120</td>
                                <td><span class="badge badge-warning">Dropped Off</span></td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>Bank Transfer</td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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
