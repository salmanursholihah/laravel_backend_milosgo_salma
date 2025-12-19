@extends('layouts.app')

@section('title', ' request to be vendor')

@section('main')
<section class="section">
    <div class="section-header">
        <h1> request to be vendor</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">user</div>
            <div class="breadcrumb-item active">request to be vendor</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Update Vendor Profile</h4>
            </div>

            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Shop Banner</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Shop Name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Shop Address</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>About Shop</label>
                        <textarea class="form-control" rows="4"></textarea>
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


