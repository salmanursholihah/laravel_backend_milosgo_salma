@extends('layouts.app')
@section('title','Blogs')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Blog Posts</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
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
