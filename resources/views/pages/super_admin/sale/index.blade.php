@extends('layouts.app')

@section('title', 'Flash Sale')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Flash Sale</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Flash Sale</div>
        </div>
    </div>

    <div class="section-body">

        {{-- Flash Sale Info --}}
        <div class="card">
            <div class="card-header">
                <h4>Flash Sale Setting</h4>
            </div>
            <div class="card-body">
                <div class="form-group col-md-4 p-0">
                    <label>Sale End Date</label>
                    <input type="date" class="form-control" value="2024-12-30">
                </div>
                <button class="btn btn-primary mt-2">
                    <i class="fas fa-save"></i> Save Setting
                </button>
            </div>
        </div>

        {{-- Add Product --}}
        <div class="card">
            <div class="card-header">
                <h4>Add Product to Flash Sale</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Product</label>
                        <select class="form-control">
                            <option>-- Select Product --</option>
                            <option>iPhone 15</option>
                            <option>Samsung Galaxy</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Show on Home</label>
                        <select class="form-control">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Status</label>
                        <select class="form-control">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                </div>

                <button class="btn btn-success">
                    <i class="fas fa-plus"></i> Add Product
                </button>
            </div>
        </div>

        {{-- Table --}}
        <div class="card">
            <div class="card-header">
                <h4>Flash Sale Products</h4>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Show Home</th>
                            <th>Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>iPhone 15</td>
                            <td><span class="badge badge-success">Yes</span></td>
                            <td><span class="badge badge-primary">Active</span></td>
                            <td>
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
</section>
@endsection
