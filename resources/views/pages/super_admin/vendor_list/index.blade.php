@extends('layouts.app')
@section('title','Vendors')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Vendor List</h1>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Shop</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Admin Shop</td>
                        <td>admin@gmail.com</td>
                        <td>Milos Store</td>
                        <td>Vendor</td>
                        <td><span class="badge badge-success">Approved</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
