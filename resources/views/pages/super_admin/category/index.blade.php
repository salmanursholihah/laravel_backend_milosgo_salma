@extends('layouts.app')

@section('title', 'Category Management')

@section('main')
    <section class="section">

        {{-- SECTION HEADER --}}
        <div class="section-header">
            <h1>Category Management</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">Categories</div>
            </div>
        </div>

        {{-- SECTION BODY --}}
        <div class="section-body">
            <div class="row">

                {{-- LEFT : CATEGORY LIST --}}
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Category List</h4>
                            <div class="card-header-action">
                                <button class="btn btn-primary">
                                    <i class="fas fa-sync"></i> Refresh
                                </button>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th class="text-center" width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        {{-- DUMMY DATA --}}
                                        <tr>
                                            <td>1</td>
                                            <td><i class="fas fa-laptop"></i></td>
                                            <td>Electronics</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td><i class="fas fa-tshirt"></i></td>
                                            <td>Fashion</td>
                                            <td>
                                                <span class="badge badge-secondary">Inactive</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td><i class="fas fa-couch"></i></td>
                                            <td>Furniture</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT : CREATE CATEGORY --}}
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Category</h4>
                        </div>

                        <div class="card-body">
                            <form>

                                <div class="form-group">
                                    <label>Category Icon</label>
                                    <select class="form-control">
                                        <option value="fa-laptop">💻 Laptop</option>
                                        <option value="fa-tshirt">👕 Fashion</option>
                                        <option value="fa-couch">🛋 Furniture</option>
                                        <option value="fa-mobile-alt">📱 Mobile</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control" placeholder="Enter category name">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <button class="btn btn-primary btn-block">
                                    <i class="fas fa-plus"></i> Create Category
                                </button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
