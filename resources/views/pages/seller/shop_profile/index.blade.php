@extends('layouts.app')

@section('title', ' shop profile')

@section('main')
<section class="section">
    <div class="section-header">
        <h1> shop profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">seller</div>
            <div class="breadcrumb-item active">shop profile</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Shop profile</h4>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
    <tr>
        <th>Shop Name</th>
        <td>Milos Store</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>shop@milosgo.com</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>Jakarta, Indonesia</td>
    </tr>
    <tr>
        <th>Status</th>
        <td><span class="badge badge-success">Active</span></td>
    </tr>
                    </table>
       </div>
    </div>
</section>
@endsection

