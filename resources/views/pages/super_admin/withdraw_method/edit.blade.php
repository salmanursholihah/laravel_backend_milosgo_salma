@extends('layouts.app')
@section('title', 'Edit Withdraw Method')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Edit Withdraw Method</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('super_admin.withdraw_method.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Withdraw Method</h4>
            </div>

            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Dummy data (nanti diganti $withdrawMethod) --}}
                    <div class="form-group">
                        <label>Method Name</label>
                        <input type="text" class="form-control" name="name"
                               value="Bank Transfer">
                    </div>

                    <div class="form-group">
                        <label>Minimum Amount</label>
                        <input type="number" class="form-control" name="min_amount"
                               value="100000">
                    </div>

                    <div class="form-group">
                        <label>Maximum Amount</label>
                        <input type="number" class="form-control" name="max_amount"
                               value="10000000">
                    </div>

                    <div class="form-group">
                        <label>Withdraw Charge (%)</label>
                        <input type="number" step="0.01" class="form-control" name="charge"
                               value="2">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-warning">
                            <i class="fas fa-edit"></i> Update Method
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
