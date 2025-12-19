@extends('layouts.app')
@section('title','Brands')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Brands</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Brand List</h4>
                <div class="card-header-action">
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Brand
                    </button>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Featured</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="https://via.placeholder.com/50" class="rounded">
                            </td>
                            <td>Samsung</td>
                            <td>
                                <span class="badge badge-info">Yes</span>
                            </td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
