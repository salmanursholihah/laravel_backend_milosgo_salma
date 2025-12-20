@extends('layouts.app')
@section('title','withdraw')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>withdraw</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>withdraw List</h4>
                <div class="card-header-action">
                <a href="{{ route('seller.withdraw.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Withdraw</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Method</th>
            <th>Total Amount</th>
            <th>Withdraw Amount</th>
            <th>Withdraw Charge</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Bank Transfer</td>
            <td>Rp5.000.000</td>
            <td>Rp4.800.000</td>
            <td>Rp200.000</td>
            <td><span class="badge badge-warning">Pending</span></td>
            <td>
                <a href="#" class="btn btn-sm btn-info">Detail</a>
            </td>
        </tr>
    </tbody>
                    </table>
       </div>
    </div>
</section>
@endsection
