@extends('layouts.app')
@section('title','Products')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Products</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Product List</h4>
            </div>

            <div class="card-body p-0">
                <table class="table table-hover mb-0">
             @foreach($products as $product)
<tr>
    <td>{{ $product->name }}</td>
    <td>{{ $product->vendor->name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ ucfirst($product->status) }}</td>
    <td>
        <form method="POST" action="{{ route('super_admin.product.approve', $product->id) }}">
            @csrf
            <button class="btn btn-success btn-sm">Approve</button>
        </form>

        <form method="POST" action="{{ route('super_admin.product.reject', $product->id) }}">
            @csrf
            <button class="btn btn-danger btn-sm">Reject</button>
        </form>
    </td>
</tr>
@endforeach

                </table>
            </div>
        </div>
    </div>
</section>
@endsection


