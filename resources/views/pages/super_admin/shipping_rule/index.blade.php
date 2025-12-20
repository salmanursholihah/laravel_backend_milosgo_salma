@extends('layouts.app')

@section('title', 'Shipping Rules')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Shipping Rules</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Shipping Rules</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Shipping Rule List</h4>
                <div class="card-header-action">
                    <a href="{{route('super_admin.shipping_rule.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Shipping Rule</a>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Min Cost</th>
                                <th>Cost</th>
                                <th>Status</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- DUMMY DATA --}}
                            <tr>
                                <td>#1</td>
                                <td>Flat Rate</td>
                                <td><span class="badge badge-info">Flat</span></td>
                                <td>-</td>
                                <td>$10</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                   <a href="{{route('super_admin.shipping_rule.edit')}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>#2</td>
                                <td>Free Shipping</td>
                                <td><span class="badge badge-primary">Conditional</span></td>
                                <td>$100</td>
                                <td>$0</td>
                                <td><span class="badge badge-secondary">Inactive</span></td>
                                <td>
                                   <a href="{{route('super_admin.shipping_rule.edit')}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
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
</section>
@endsection
