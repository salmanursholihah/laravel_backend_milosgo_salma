@extends('layouts.app')

@section('title', 'Create Coupon')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Coupon</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Coupons</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <form action="{{ route('super_admin.cupons.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" name="code" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="quantity" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Max Use Per Person</label>
                        <input type="number" name="max_use" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" name="start_date" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Discount Type</label>
                                <select name="discount_type" class="form-control">
                                    <option value="percentage">Percentage (%)</option>
                                    <option value="flat">Fixed Amount</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Discount Value</label>
                                <input type="number" name="discount" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Total Usage</label>
                        <input type="number" name="total" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                </div>

                <div class="card-footer text-right">
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Coupon
                    </button>
                    <a href="{{ route('super_admin.cupons.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
