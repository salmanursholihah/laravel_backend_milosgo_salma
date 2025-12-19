@extends('layouts.app')

@section('title', ' reviews')

@section('main')
<section class="section">
    <div class="section-header">
        <h1> reviews</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">seller</div>
            <div class="breadcrumb-item active">reviews</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Review</h4>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>User</th>
            <th>Rating</th>
            <th>Review</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Product A</td>
            <td>Jane</td>
            <td>★★★★☆</td>
            <td>Produk bagus</td>
            <td><span class="badge badge-success">Approved</span></td>
        </tr>
    </tbody>
                    </table>
       </div>
    </div>
</section>
@endsection

