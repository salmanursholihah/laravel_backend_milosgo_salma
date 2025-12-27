@extends('layouts.app')

@section('title', 'product')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>product</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">E-Commerce</div>
                <div class="breadcrumb-item active">product</div>
            </div>
        </div>


        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('super_admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Vendor / Seller</label>
                            <select name="vendor_id" class="form-control" required>
                                <option value="">-- Pilih Vendor --</option>
                                @foreach ($vendors as $vendor)
                                    <option value="{{ $vendor->id }}">
                                        {{ $vendor->shop_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Product Images</label>
                            <input type="file" name="images[]" class="form-control" multiple required>
                        </div>


                        <button class="btn btn-primary">Save</button>
                    </form>




                </div>
            </div>
        @endsection
