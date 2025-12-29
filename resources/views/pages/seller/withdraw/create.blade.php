@extends('layouts.app')
@section('title','Request Withdraw')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Request Withdraw</h1>
    </div>

    <div class="card">
        <div class="card-body">

            {{-- error message --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- balance --}}
            <div class="alert alert-info">
                Available Balance:
                <strong>Rp {{ number_format($balance) }}</strong>
            </div>

            <form action="{{ route('seller.withdraw.store') }}" method="POST">
                @csrf

                {{-- withdraw method --}}
                <div class="form-group">
                    <label>Withdraw Method</label>
                    <select name="withdraw_method_id" class="form-control" required>
                        <option value="">-- Select Method --</option>
                        @foreach($methods as $method)
                            <option value="{{ $method->id }}">
                                {{ $method->name }}
                                (Min: {{ number_format($method->minimum_amount) }},
                                Charge: {{ $method->withdraw_charge }}%)
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- withdraw amount --}}
                <div class="form-group">
                    <label>Withdraw Amount</label>
                    <input type="number"
                           name="withdraw_amount"
                           class="form-control"
                           value="{{ old('withdraw_amount') }}"
                           required>
                </div>

                {{-- info charge --}}
                <div class="mb-3 text-muted">
                    <small>
                        Withdraw charge dihitung otomatis oleh sistem
                    </small>
                </div>

                {{-- account info --}}
                <div class="card mt-3">
                    <div class="card-header">
                        <h6>Account Information</h6>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <label>Account Holder Name</label>
                            <input type="text"
                                   name="account_name"
                                   class="form-control"
                                   value="{{ old('account_name') }}"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Bank Name</label>
                            <select name="bank_name" class="form-control" required>
                                <option value="">-- Select Bank --</option>
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="Mandiri">Mandiri</option>
                                <option value="BSI">BSI</option>
                                <option value="CIMB">CIMB Niaga</option>
                                <option value="Danamon">Danamon</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Account Number</label>
                            <input type="text"
                                   name="account_number"
                                   class="form-control"
                                   value="{{ old('account_number') }}"
                                   required>
                        </div>

                    </div>
                </div>

                <button class="btn btn-primary mt-3">
                    Submit Withdraw
                </button>

            </form>
        </div>
    </div>
</section>
@endsection
