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
                   <a href="{{route('super_admin.brands.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Brand</a>
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
 <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    <a href="{{route('super_admin.brands.edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
