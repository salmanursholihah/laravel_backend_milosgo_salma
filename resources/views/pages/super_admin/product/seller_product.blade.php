@extends('layouts.app')

@section('title', 'Seller Products')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Seller Products</h1>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Seller</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>

                        <td>
                            {{ $product->vendor->name ?? '-' }}
                        </td>

                        <td>
                            Rp {{ number_format($product->price) }}
                        </td>

                        <td>
                            <span class="badge badge-
                                {{ $product->status == 'approved' ? 'success' :
                                   ($product->status == 'rejected' ? 'danger' : 'warning') }}">
                                {{ ucfirst($product->status) }}
                            </span>
                        </td>

                        <td>
                            @if($product->status == 'pending')
                                <form action="{{ route('super_admin.product.approve', $product->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-success btn-sm">
                                        Approve
                                    </button>
                                </form>

                                <form action="{{ route('super_admin.product.reject', $product->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        Reject
                                    </button>
                                </form>
                            @else
                                <span class="text-muted">No Action</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            Tidak ada product seller
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>

        </div>
    </div>
</section>
@endsection
