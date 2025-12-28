@extends('layouts.app')
@section('title', 'Create Withdraw Method')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Withdraw Method</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('super_admin.withdraw_method.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('super_admin.withdraw_method.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Method Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Ex: Bank Transfer"
                               value="{{ old('name') }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Minimum Amount</label>
                        <input type="number"
                               name="min_amount"
                               class="form-control"
                               placeholder="100000"
                               value="{{ old('min_amount') }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Maximum Amount</label>
                        <input type="number"
                               name="max_amount"
                               class="form-control"
                               placeholder="10000000"
                               value="{{ old('max_amount') }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Withdraw Charge (%)</label>
                        <input type="number"
                               step="0.01"
                               name="charge"
                               class="form-control"
                               placeholder="2"
                               value="{{ old('charge') }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Method
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
@endsection
