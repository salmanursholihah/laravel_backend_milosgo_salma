@extends('layouts.app')
@section('title','Withdraw Requests')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Withdraw Requests</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Vendor</th>
                        <th>Method</th>
                        <th>Amount</th>
                        <th>Charge</th>
                        <th>Status</th>
                        <th width="150">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($withdraws as $w)
                    <tr>
                        <td>{{ $w->vendor->name }}</td>
                        <td>{{ $w->method->name }}</td>
                        <td>{{ number_format($w->withdraw_amount) }}</td>
                        <td>{{ number_format($w->withdraw_charge) }}</td>
                        <td>
                            <span class="badge badge-info">{{ $w->status }}</span>
                        </td>
                        <td>
                            @if($w->status == 'pending')
                                <form action="{{ route('super_admin.withdraw.paid',$w->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-success btn-sm">Paid</button>
                                </form>
                                <form action="{{ route('super_admin.withdraw.decline',$w->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Decline</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
