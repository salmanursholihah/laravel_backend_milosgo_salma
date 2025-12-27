@extends('layouts.app')

@section('title', 'Edit Product')

@section('main')
<section class="section">

    {{-- HEADER --}}
    <div class="section-header">
        <h1>Edit Product</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Edit Product</div>
        </div>
    </div>

    {{-- CARD --}}
    <div class="section-body">
        <div class="card">
            <div class="card-body">

                {{-- WARNING --}}
                @if($product->status === 'approved')
                    <div class="alert alert-warning">
                        Product sudah <strong>approved</strong> dan tidak dapat diedit.
                    </div>
                @endif

                <form action="{{ route('seller.products.update', $product->id) }}"
                      method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- NAME --}}
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', $product->name) }}"
                               required
                               {{ $product->status === 'approved' ? 'disabled' : '' }}>
                    </div>

                    {{-- PRICE --}}
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number"
                               name="price"
                               class="form-control"
                               value="{{ old('price', $product->price) }}"
                               required
                               {{ $product->status === 'approved' ? 'disabled' : '' }}>
                    </div>

                    {{-- EXISTING IMAGES --}}
                    <div class="form-group">
                        <label>Current Images</label><br>

                        @if($product->images->count())
                            @foreach($product->images as $img)
                                <img src="{{ asset('storage/' . $img->image) }}"
                                     width="80"
                                     class="rounded mr-2 mb-2">
                            @endforeach
                        @elseif($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"
                                 width="80"
                                 class="rounded">
                        @else
                            <p class="text-muted">No image</p>
                        @endif
                    </div>

                    {{-- UPLOAD NEW IMAGES --}}
                    <div class="form-group">
                        <label>Add New Images</label>
                        <input type="file"
                               name="images[]"
                               class="form-control"
                               multiple
                               {{ $product->status === 'approved' ? 'disabled' : '' }}>
                        <small class="text-muted">
                            Bisa upload lebih dari satu gambar
                        </small>
                    </div>

                    {{-- DESCRIPTION --}}
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="4"
                                  {{ $product->status === 'approved' ? 'disabled' : '' }}>{{ old('description', $product->description) }}</textarea>
                    </div>

                    {{-- ACTION --}}
                    @if($product->status !== 'approved')
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Product
                        </button>
                        <a href="{{ route('seller.products.index') }}"
                           class="btn btn-secondary">
                            Cancel
                        </a>
                    @else
                        <a href="{{ route('seller.products.index') }}"
                           class="btn btn-secondary">
                            Back
                        </a>
                    @endif

                </form>

            </div>
        </div>
    </div>

</section>
@endsection
