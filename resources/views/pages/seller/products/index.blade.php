@extends('layouts.app')

@section('title', 'My Products')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>My Products</h1>
       <a href="{{ route('seller.products.create') }}" class="btn btn-primary mb-3">
    + Add Product
</a>

    </div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>Rp {{ number_format($product->price) }}</td>
                <td>
                    <span class="badge badge-
                        {{ $product->status == 'approved' ? 'success' :
                           ($product->status == 'rejected' ? 'danger' : 'warning') }}">
                        {{ ucfirst($product->status) }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('seller.products.edit', $product->id) }}"
                       class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada product</td>
            </tr>
        @endforelse
    </tbody>
</table>
</section>
@endsection
