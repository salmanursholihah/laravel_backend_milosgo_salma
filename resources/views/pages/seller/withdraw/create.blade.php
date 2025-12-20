@extends('layouts.app')

@section('title', 'Create Withdraw')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Withdraw</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Seller</div>
            <div class="breadcrumb-item active">Withdraw</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Withdraw Request</h4>
            </div>

            <div class="card-body">
                <form action="#" method="POST">
                    @csrf

                    {{-- Withdraw Method --}}
                    <div class="form-group">
                        <label>Withdraw Method</label>
                        <select class="form-control">
                            <option value="">-- Select Method --</option>
                            <option>Bank Transfer</option>
                            <option>PayPal</option>
                            <option>Stripe</option>
                        </select>
                    </div>

                    {{-- Total Balance --}}
                    <div class="form-group">
                        <label>Total Balance</label>
                        <input type="text" class="form-control" value="Rp5.000.000" readonly>
                    </div>

                    {{-- Withdraw Amount --}}
                    <div class="form-group">
                        <label>Withdraw Amount</label>
                        <input type="number" class="form-control" placeholder="Enter amount">
                    </div>

                    {{-- Charge --}}
                    <div class="form-group">
                        <label>Withdraw Charge</label>
                        <input type="text" class="form-control" value="Rp200.000" readonly>
                    </div>

                    {{-- Note --}}
                    <div class="form-group">
                        <label>Note (Optional)</label>
                        <textarea class="form-control" rows="3" placeholder="Additional note"></textarea>
                    </div>

                    {{-- Button --}}
                    <div class="form-group text-right">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                        <button class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Submit Withdraw
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
