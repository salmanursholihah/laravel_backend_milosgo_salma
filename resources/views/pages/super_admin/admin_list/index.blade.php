@extends('layouts.app')
@section('title','Admin List')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Admin List</h1>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Super Admin</td>
                        <td>admin@milos.com</td>
                        <td>Super Admin</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

