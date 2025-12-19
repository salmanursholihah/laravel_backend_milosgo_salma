@extends('layouts.app')
@section('title','Footer Settings')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Footer</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Footer Logo</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="+62 711 4121 05">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="ptutamacta@gmail.com">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="Indonesia">
                    </div>

                    <div class="form-group">
                        <label>Copyright</label>
                        <input type="text" class="form-control"
                            value="Copyright © 2020 Milosshop. All Rights Reserved.">
                    </div>

                    <button class="btn btn-primary">Update</button>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
