@extends('layouts.app')
@section('title', 'Edit Withdraw Method')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Edit Withdraw Method</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('super_admin.withdraw-list.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('super_admin.withdraw-methods.update', $method->id) }}"
                      method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Method Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', $method->name) }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Minimum Amount</label>
                        <input type="number"
                               name="min_amount"
                               class="form-control"
                               value="{{ old('min_amount', $method->minimum_amount) }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Maximum Amount</label>
                        <input type="number"
                               name="max_amount"
                               class="form-control"
                               value="{{ old('max_amount', $method->maximum_amount) }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Withdraw Charge (%)</label>
                        <input type="number"
                               step="0.01"
                               name="charge"
                               class="form-control"
                               value="{{ old('charge', $method->charge) }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $method->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $method->status == 0 ? 'selected' : '' }}>Inactive</option>
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
