@extends('layouts.app')
@section('title','Website Settings')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Website Settings</h1>
    </div>

    <div class="section-body">
        <div class="row">

            {{-- LEFT MENU --}}
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    Homepage Banner Section One
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Homepage Banner Section Two</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Homepage Banner Section Three</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Product Page Banner</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Cart Page Banner</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- RIGHT FORM --}}
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Banner</h4>
                    </div>

                    <div class="card-body">
                        <form>

                            {{-- STATUS --}}
                            <div class="form-group">
                                <label>Status</label><br>
                                <label class="custom-switch mt-2">
                                    <input type="checkbox" class="custom-switch-input" checked>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">Active</span>
                                </label>
                            </div>

                            {{-- PREVIEW --}}
                            <div class="form-group">
                                <label>Current Banner</label><br>
                                <img src="https://via.placeholder.com/600x150"
                                     class="img-fluid rounded shadow-sm">
                            </div>

                            {{-- IMAGE --}}
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control">
                            </div>

                            {{-- URL --}}
                            <div class="form-group">
                                <label>Banner URL</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="https://example.com">
                            </div>

                            <button class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Banner
                            </button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
