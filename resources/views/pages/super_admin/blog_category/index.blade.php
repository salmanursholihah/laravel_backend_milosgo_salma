@extends('layouts.app')
@section('title', 'Blog Categories')

@section('main')
    <section class="section">
      <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Blog Category </h4>
                <div class="card-header-action">
                    <a href="{{route('super_admin.blog_category.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add blog_category
                    </a>
                </div>
            </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>news</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    <a href="{{ route('super_admin.blog_category.edit') }}"
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
