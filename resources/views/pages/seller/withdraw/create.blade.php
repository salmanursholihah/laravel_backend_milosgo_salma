@extends('layouts.app')
@section('title','Request Withdraw')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Request Withdraw</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="alert alert-info">
                Available Balance: <strong>{{ number_format($balance) }}</strong>
            </div>

            <form action="{{ route('seller.withdraw.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Withdraw Method</label>
                    <select name="withdraw_method_id" class="form-control" required>
                        @foreach($methods as $method)
                            <option value="{{ $method->id }}">
                                {{ $method->name }} (Min: {{ number_format($method->minimum_amount) }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Withdraw Amount</label>
                    <input type="number" name="withdraw_amount" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Account Information</label>
                    <textarea name="account_info" class="form-control" required></textarea>
                </div>

                <button class="btn btn-primary">Submit Withdraw</button>
            </form>
        </div>
    </div>
</section>
@endsection
