@extends('layouts.app')

@section('title', 'All Products')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>All Products</h1>
        </div>

        <div class="card">
            <div class="card-body">

                {{-- ACTION HEADER --}}
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div></div>
                    <div>
                        <a href="{{ route('super_admin.product.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Product
                        </a>
                    </div>
                </div>

                {{-- FILTER STATUS --}}
                <form method="GET" class="mb-3">
                    <select name="status" onchange="this.form.submit()" class="form-control w-25">
                        <option value="">All Status</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>
                            Pending
                        </option>
                        <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>
                            Approved
                        </option>
                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>
                            Rejected
                        </option>
                    </select>
                </form>

                {{-- TABLE --}}
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Seller</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Source</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                {{-- PRODUCT (MULTI IMAGE + NAME) --}}
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if ($product->images->count())
                                            @foreach ($product->images as $img)
                                                <img src="{{ asset('storage/' . $img->image) }}" alt="product image"
                                                    width="60" class="mr-1 rounded">
                                            @endforeach
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </div>

                                    <strong>{{ $product->name }}</strong>
                                </td>

                                {{-- SELLER --}}
                                <td>
                                    {{ $product->vendor->shop_name ?? 'Admin' }}
                                </td>

                                {{-- PRICE --}}
                                <td>Rp {{ number_format($product->price) }}</td>

                                {{-- STATUS --}}
                                <td>
                                    <span
                                        class="badge badge-
            {{ $product->status === 'approved' ? 'success' : ($product->status === 'rejected' ? 'danger' : 'warning') }}">
                                        {{ ucfirst($product->status) }}
                                    </span>
                                </td>

                                {{-- SOURCE --}}
                                <td>
                                    {{ $product->vendor_id ? 'Seller' : 'Admin' }}
                                </td>

                                {{-- ACTION --}}
                                <td>
                                    @if ($product->status === 'pending')
                                        <form action="{{ route('super_admin.product.approve', $product->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            <button class="btn btn-success btn-sm">Approve</button>
                                        </form>

                                        <form action="{{ route('super_admin.product.reject', $product->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">Reject</button>
                                        </form>
                                    @else
                                        <span class="text-muted">No Action</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    Tidak ada product
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection
