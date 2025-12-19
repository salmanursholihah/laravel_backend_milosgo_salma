@extends('layouts.app')

@section('title', 'My Profile')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Profile</h1>
    </div>

    <div class="section-body">
        <div class="row">

            {{-- BASIC INFORMATION --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic Information</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Profile Image</label>
                                <input type="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="Jhon Deo">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="user@gmail.com">
                            </div>

                            <button class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Profile
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- UPDATE PASSWORD --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Password</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <button class="btn btn-warning">
                                <i class="fas fa-lock"></i> Change Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
