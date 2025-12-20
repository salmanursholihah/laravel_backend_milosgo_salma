@extends('layouts.app')

@section('title', 'blogs')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>blogs</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">blogs</div>
        </div>
    </div>


    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <a href="{{route('super_admin.blogs.create')}}" class="btn btn-primary"> + Add blogs</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Publish</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td><img src="https://via.placeholder.com/60"></td>
                            <td>Laravel Tips</td>
                            <td>Tech</td>
                            <td><span class="badge badge-primary">Published</span></td>
                            <td>18-12-2025</td>
                            <td>
 <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    <a href="{{route('super_admin.blogs.edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
