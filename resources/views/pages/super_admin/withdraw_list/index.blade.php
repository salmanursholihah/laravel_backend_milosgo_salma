@extends('layouts.app')
@section('title','Withdraw Requests')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Withdraw Requests</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vendor</th>
                            <th>Method</th>
                            <th>Total</th>
                            <th>Withdraw</th>
                            <th>Charge</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12</td>
                            <td>Admin Shop</td>
                            <td>Bank Transfer</td>
                            <td>Rp5.000.000</td>
                            <td>Rp4.800.000</td>
                            <td>Rp200.000</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td>18-12-2025</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
