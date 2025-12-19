@extends('layouts.app')

@section('title', 'Vendor Profile')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Vendor Profile</h1>
    </div>

    <div class="section-body">
        <div class="row">

            {{-- Preview --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Shop Preview</h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/300x150"
                             class="img-fluid rounded mb-3">
                        <h5>Admin Shop</h5>
                        <p class="text-muted">admin@gmail.com</p>
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Vendor Profile</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Shop Banner</label>
                                <input type="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Shop Name</label>
                                <input type="text" class="form-control" value="Admin Shop">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="+62812345678">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3">
Jl. Sudirman No 12, Jakarta
                                </textarea>
                            </div>

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
