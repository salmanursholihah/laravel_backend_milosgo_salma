@extends('layouts.app')
@section('title','Manage User')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Manage User</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control">
                            <option>Select</option>
                            <option>Super Admin</option>
                            <option>Seller</option>
                            <option>User</option>
                        </select>
                    </div>

                    <button class="btn btn-primary">Create</button>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
