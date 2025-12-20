@extends('layouts.app')

@section('title', 'Coupons')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Coupons</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">Coupons</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Coupon List</h4>
                <div class="card-header-action">
                    <a href="{{route('super_admin.cupon.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Coupon</a>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Discount Type</th>
                                <th>Discount</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- DUMMY DATA --}}
                            <tr>
                                <td>#1</td>
                                <td>NEWYEAR25</td>
                                <td><span class="badge badge-info">Percentage</span></td>
                                <td>25%</td>
                                <td>01 Jan 2025</td>
                                <td>31 Jan 2025</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                               <a href="{{route('super_admin.cupon.edit')}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>#2</td>
                                <td>SHIPFREE</td>
                                <td><span class="badge badge-secondary">Flat</span></td>
                                <td>$10</td>
                                <td>10 Dec 2025</td>
                                <td>20 Dec 2025</td>
                                <td><span class="badge badge-secondary">Inactive</span></td>
                                <td>
                               <a href="{{route('super_admin.cupon.edit')}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
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
