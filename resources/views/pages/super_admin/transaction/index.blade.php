@extends('layouts.app')

@section('title', 'Transactions')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Transactions</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Finance</div>
            <div class="breadcrumb-item active">Transactions</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Transaction List</h4>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Invoice ID</th>
                                <th>Transaction ID</th>
                                <th>Payment Method</th>
                                <th>Amount (Base)</th>
                                <th>Amount (Real)</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- DUMMY DATA --}}
                            <tr>
                                <td>#1</td>
                                <td>INV-2025001</td>
                                <td>TRX-889123</td>
                                <td>Bank Transfer</td>
                                <td>$120.00</td>
                                <td>IDR 1.860.000</td>
                            </tr>
                            <tr>
                                <td>#2</td>
                                <td>INV-2025002</td>
                                <td>TRX-889124</td>
                                <td>Credit Card</td>
                                <td>$85.00</td>
                                <td>IDR 1.317.500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
