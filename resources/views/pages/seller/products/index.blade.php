@extends('layouts.app')

@section('title', 'My Products')

@section('main')
<section class="section">

    {{-- HEADER --}}
    <div class="section-header d-flex justify-content-between align-items-center">
        <h1>My Products</h1>
        <a href="{{ route('seller.products.create') }}"
           class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Product
        </a>
    </div>

    {{-- CARD --}}
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th width="120">Image</th>
                            <th>Name</th>
                            <th width="150">Price</th>
                            <th width="120">Status</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse($products as $product)
                        <tr>

                            {{-- IMAGE --}}
                            <td>
                                @if($product->images->count())
                                    <img src="{{ asset('storage/' . $product->images->first()->image) }}"
                                         alt="product"
                                         width="80"
                                         class="rounded">
                                @elseif($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}"
                                         alt="product"
                                         width="80"
                                         class="rounded">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            {{-- NAME --}}
                            <td>
                                <strong>{{ $product->name }}</strong>
                            </td>

                            {{-- PRICE --}}
                            <td>
                                Rp {{ number_format($product->price) }}
                            </td>

                            {{-- STATUS --}}
                            <td>
                                <span class="badge badge-
                                    {{ $product->status === 'approved' ? 'success' :
                                       ($product->status === 'rejected' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($product->status) }}
                                </span>
                            </td>

                            {{-- ACTION --}}
                            <td>
                                @if($product->status !== 'approved')
                                    <a href="{{ route('seller.products.edit', $product->id) }}"
                                       class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                @else
                                    <span class="text-muted">Locked</span>
                                @endif
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Belum ada product
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
