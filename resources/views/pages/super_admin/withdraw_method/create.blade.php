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
            <div class="card-header">
                <h4>Withdraw Method Form</h4>
            </div>

            <div class="card-body">
                <form action="#" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Method Name</label>
                        <input type="text" class="form-control" name="name"
                               placeholder="Ex: Bank Transfer">
                    </div>

                    <div class="form-group">
                        <label>Minimum Amount</label>
                        <input type="number" class="form-control" name="min_amount"
                               placeholder="100000">
                    </div>

                    <div class="form-group">
                        <label>Maximum Amount</label>
                        <input type="number" class="form-control" name="max_amount"
                               placeholder="10000000">
                    </div>

                    <div class="form-group">
                        <label>Withdraw Charge (%)</label>
                        <input type="number" step="0.01" class="form-control" name="charge"
                               placeholder="2">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
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
