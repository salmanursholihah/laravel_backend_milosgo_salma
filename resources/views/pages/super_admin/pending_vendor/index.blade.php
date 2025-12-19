@extends('layouts.app')
@section('title','Pending Vendors')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Pending Vendors</h1>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Shop</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td>Salman</td>
                        <td>Salman Store</td>
                        <td>shop@gmail.com</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
