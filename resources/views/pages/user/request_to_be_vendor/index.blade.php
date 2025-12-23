@extends('layouts.app')

@section('title', 'Request to be Vendor')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Request to be Vendor</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Update Vendor Profile</h4>
            </div>

            <div class="card-body">
                <form
                    method="POST"
                    action="{{ route('user.request_to_be_vendor.store') }}"
                    enctype="multipart/form-data"
                >
                    @csrf

                    <div class="form-group">
                        <label>Shop Banner</label>
                        <input type="file" name="banner" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Shop Name</label>
                        <input type="text" name="shop_name" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Shop Address</label>
                        <textarea name="address" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>About Shop</label>
                        <textarea name="about" class="form-control" rows="4"></textarea>
                    </div>

                    <button class="btn btn-primary">
                        <i class="fas fa-check"></i> Submit
                    </button>
                </form>
            </div>
       </div>
    </div>
</section>
@endsection
