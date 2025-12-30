@extends('layouts.app')

@section('title', 'Vendor Profile')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Vendor Profile</h1>
        </div>

        <div class="section-body">
            <div class="row">

                {{-- PREVIEW --}}
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Shop Preview</h4>
                        </div>
                        <div class="card-body text-center">

                            {{-- Banner --}}
                            @if ($vendor->banner)
                                <img src="{{ asset('storage/' . $vendor->banner) }}" class="img-fluid rounded mb-3"
                                    style="max-height:180px; object-fit:cover;">
                            @else
                                <img src="https://via.placeholder.com/300x150" class="img-fluid rounded mb-3">
                            @endif

                            <h5>{{ $vendor->shop_name }}</h5>
                            <p class="text-muted">{{ $vendor->email }}</p>

                            {{-- Status --}}
                            <span
                                class="badge
                            @if ($vendor->status == 'approved') badge-success
                            @elseif($vendor->status == 'pending') badge-warning
                            @else badge-danger @endif
                        ">
                                {{ ucfirst($vendor->status) }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- FORM --}}
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Vendor Profile</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('super_admin.vendor_profile.update', $vendor->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')



                                {{-- Banner --}}
                                <div class="form-group">
                                    <label>Shop Banner</label>
                                    <input type="file" name="banner" class="form-control">
                                </div>

                                {{-- Shop Name --}}
                                <div class="form-group">
                                    <label>Shop Name</label>
                                    <input type="text" name="shop_name" class="form-control"
                                        value="{{ old('shop_name', $vendor->shop_name) }}" required>
                                </div>

                                {{-- Email --}}
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $vendor->email) }}" required>
                                </div>

                                {{-- Phone --}}
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                        value="{{ old('phone', $vendor->phone) }}">
                                </div>

                                {{-- Address --}}
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" rows="3">{{ old('address', $vendor->address) }}</textarea>
                                </div>

                                {{-- Description --}}
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="4">{{ old('description', $vendor->description) }}</textarea>
                                </div>

                                {{-- Social Links --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="url" name="fb_link" class="form-control"
                                                value="{{ old('fb_link', $vendor->fb_link) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="url" name="tw_link" class="form-control"
                                                value="{{ old('tw_link', $vendor->tw_link) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="url" name="insta_link" class="form-control"
                                                value="{{ old('insta_link', $vendor->insta_link) }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- SUBMIT --}}
                                <button class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update Profile
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
