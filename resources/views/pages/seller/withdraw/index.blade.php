@extends('layouts.app')
@section('title', 'My Withdraws')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>My Withdraw Requests</h1>
            <div class="section-header-button">
                <a href="{{ route('seller.withdraw.create') }}" class="btn btn-primary">
                    New Withdraw
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Method</th>
                            <th>Amount</th>
                            <th>Charge</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($withdraws as $w)
                            <tr>
                                <td>{{ optional($w->method)->name ?? '-' }}</td>
                                <td>{{ number_format($w->withdraw_amount) }}</td>
                                <td>{{ number_format($w->withdraw_charge) }}</td>
                                <td>
                                    <span class="badge badge-info">{{ $w->status }}</span>
                                </td>
                                <td>{{ $w->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
