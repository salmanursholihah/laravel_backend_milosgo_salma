@extends('layouts.app')

@section('title', ' address')

@section('main')
<section class="section">
    <div class="section-header">
        <h1> address</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">user</div>
            <div class="breadcrumb-item active">address</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">

            {{-- BILLING ADDRESS --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4>Billing Address</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <button class="btn btn-primary btn-block">
                                <i class="fas fa-save"></i> Save Address
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- SHIPPING ADDRESS --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4>Shipping Address</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="text" class="form-control">
                            </div>

                            <button class="btn btn-success btn-block">
                                <i class="fas fa-save"></i> Save Shipping
                            </button>
                        </form>
                    </div>
                </div>
            </div>

       </div>
    </div>
</section>
@endsection


