@extends('layouts.app')
@section('title','Customers')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Customer List</h1>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Salma</td>
                        <td>salma@gmail.com</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
