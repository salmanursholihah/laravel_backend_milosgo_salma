@extends('layouts.app')
@section('title','Product Reviews')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Product Reviews</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Review List</h4>
        </div>

        <div class="card-body p-0">
            <table class="table table-hover table-md">
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
                        <td>Gaming Laptop</td>
                        <td>Salma</td>
                        <td>⭐⭐⭐⭐☆</td>
                        <td>Produk bagus dan cepat sampai</td>
                        <td><span class="badge badge-success">Approved</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
