@extends('layouts.app')
@section('title','Footer Info')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Footer Information</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('super_admin.footer_info.update', $footerInfo->id) }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Footer Logo</label><br>
                        @if($footerInfo->logo)
                            <img src="{{ asset('storage/'.$footerInfo->logo) }}" width="120" class="mb-2">
                        @endif
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text"
                               name="phone"
                               class="form-control"
                               value="{{ old('phone', $footerInfo->phone) }}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email', $footerInfo->email) }}">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address"
                                  class="form-control"
                                  rows="2">{{ old('address', $footerInfo->address) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Copyright</label>
                        <input type="text"
                               name="copyright"
                               class="form-control"
                               value="{{ old('copyright', $footerInfo->copyright) }}">
                    </div>

                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Footer
                    </button>

                </form>

            </div>
        </div>
    </div>
</section>
@endsection
