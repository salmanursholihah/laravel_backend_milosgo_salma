@extends('layouts.app')
@section('title','Withdraw Requests')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Withdraw Requests</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Vendor</th>
                            <th>Method</th>
                            <th>Account Info</th>
                            <th>Amount</th>
                            <th>Charge</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th width="180">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($withdraws as $w)
                        <tr>
                            <td>{{ $w->vendor->name }}</td>

                            <td>{{ $w->method->name }}</td>

                            <td>
                                <strong>{{ $w->account_name }}</strong><br>
                                <small>{{ $w->bank_name }}</small><br>
                                <small class="text-muted">{{ $w->account_number }}</small>
                            </td>

                            <td>{{ number_format($w->withdraw_amount) }}</td>

                            <td>{{ number_format($w->withdraw_charge) }}</td>

                            <td>
                                <strong>{{ number_format($w->total_amount) }}</strong>
                            </td>

                            <td>
                                <span class="badge badge-{{
                                    $w->status == 'pending' ? 'warning' :
                                    ($w->status == 'paid' ? 'success' : 'danger')
                                }}">
                                    {{ ucfirst($w->status) }}
                                </span>
                            </td>

                            <td>
                                @if($w->status == 'pending')
                                    <form action="{{ route('super_admin.withdraw.paid', $w->id) }}"
                                          method="POST" class="d-inline">
                                        @csrf
                                        <button class="btn btn-success btn-sm"
                                                onclick="return confirm('Mark this withdraw as PAID?')">
                                            Paid
                                        </button>
                                    </form>

                                    <form action="{{ route('super_admin.withdraw.decline', $w->id) }}"
                                          method="POST" class="d-inline">
                                        @csrf
                                        <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Decline this withdraw?')">
                                            Decline
                                        </button>
                                    </form>
                                @else
                                    <span class="text-muted">No Action</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">
                                No withdraw requests found
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
