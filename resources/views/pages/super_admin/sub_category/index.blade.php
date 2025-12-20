@extends('layouts.app')
@section('title', 'Sub Category')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Sub Categories</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Sub Category List</h4>
                    <div class="card-header-action">
                      <a href="{{ route('super_admin.sub_category.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Sub Category</a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Smartphone</td>
                                    <td>smartphone</td>
                                    <td>Electronics</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        <a href="{{ route('super_admin.sub_category.edit') }}"
                                            class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
