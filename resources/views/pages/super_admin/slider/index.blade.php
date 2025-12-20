@extends('layouts.app')
@section('title', 'Slider')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Homepage Slider</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Slider List</h4>
                </div>

                <div class="card-body p-0">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Banner</th>
                                <th>Title</th>
                                <th>Serial</th>
                                <th>Status</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="https://via.placeholder.com/120x50"></td>
                                <td>Big Sale</td>
                                <td>1</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    <a href="{{ route('super_admin.slider.edit') }}"
                                        class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
