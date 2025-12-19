@extends('layouts.app')
@section('title','Child Category')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Child Categories</h1>
    </div>

    <div class="section-body">
        <div class="card">
              <div class="card-header">
                <h4>Sub Category List</h4>
                <div class="card-header-action">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add child Category
                    </button>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gaming Laptop</td>
                            <td>Electronics</td>
                            <td>Laptop</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
