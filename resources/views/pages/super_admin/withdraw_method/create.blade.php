@extends('layouts.app')
@section('title','Create Withdraw Method')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Create Withdraw Method</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('super_admin.withdraw-methods.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Method Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label>Minimum Amount</label>
                        <input type="number" name="minimum_amount" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Maximum Amount</label>
                        <input type="number" name="maximum_amount" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Withdraw Charge</label>
                        <input type="number" name="withdraw_charge" class="form-control">
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</section>
@endsection
