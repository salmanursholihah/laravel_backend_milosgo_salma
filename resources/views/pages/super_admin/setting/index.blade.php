@extends('layouts.app')
@section('title','General Settings')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Settings</h1>
    </div>

    <div class="section-body">
        <div class="row">
            {{-- LEFT MENU --}}
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">
                        <a href="#"></a>
                        General Setting</li>
                    <li class="list-group-item">
                        <a href="#"></a>
                        Email Configuration</li>
                    <li class="list-group-item">
                        <a href="#"></a>
                        Logo & Favicon</li>
                    <li class="list-group-item">
                        <a href="#"></a>
                        Pusher Setting</li>
                </ul>
            </div>

            {{-- RIGHT CONTENT --}}
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <form>

                            <div class="form-group">
                                <label>Site Name</label>
                                <input type="text" class="form-control" value="Milosshop">
                            </div>

                            <div class="form-group">
                                <label>Layout</label>
                                <select class="form-control">
                                    <option>LTR</option>
                                    <option>RTL</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Contact Email</label>
                                <input type="email" class="form-control" value="ptutamacta@gmail.com">
                            </div>

                            <div class="form-group">
                                <label>Contact Phone</label>
                                <input type="text" class="form-control" value="+62 711 4121 05">
                            </div>

                            <div class="form-group">
                                <label>Contact Address</label>
                                <input type="text" class="form-control" value="Indonesia">
                            </div>

                            <div class="form-group">
                                <label>Google Map Url</label>
                                <input type="text" class="form-control">
                            </div>

                            <hr>

                            <div class="form-group">
                                <label>Default Currency Name</label>
                                <select class="form-control">
                                    <option>IDR</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Currency Icon</label>
                                <input type="text" class="form-control" value="Rp">
                            </div>

                            <div class="form-group">
                                <label>Timezone</label>
                                <select class="form-control">
                                    <option>Asia/Jakarta</option>
                                </select>
                            </div>

                            <button class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
