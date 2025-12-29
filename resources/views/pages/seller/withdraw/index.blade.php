@extends('layouts.app')
@section('title','My Withdraw Requests')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>My Withdraw Requests</h1>

        <div class="section-header-button">
            <a href="{{ route('seller.withdraw.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Request Withdraw
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="alert alert-info">
                Available Balance:
                <strong>{{ number_format(auth()->user()->wallet->balance ?? 0) }}</strong>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Method</th>
                            <th>Amount</th>
                            <th>Charge</th>
                            <th>Account</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($withdraws as $w)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $w->method->name ?? '-' }}</td>

                                <td>
                                    Rp {{ number_format($w->withdraw_amount) }}
                                </td>

                                <td>
                                    Rp {{ number_format($w->withdraw_charge) }}
                                </td>

                                <td>
                                    <strong>{{ $w->account_name }}</strong><br>
                                    {{ $w->bank_name }}<br>
                                    <small>{{ $w->account_number }}</small>
                                </td>

                                <td>
                                    @if($w->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($w->status == 'paid')
                                        <span class="badge badge-success">Paid</span>
                                    @else
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>

                                <td>{{ $w->created_at->format('d M Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    No withdraw requests yet
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
