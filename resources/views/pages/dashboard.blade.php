@extends('layouts.app')

@section('title', 'Dashboard')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Home</div>
                <div class="breadcrumb-item">Dashboard</div>
            </div>
        </div>

        {{-- OVERVIEW --}}
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card card-statistic-2">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Orders</h4>
                        </div>
                        <div class="card-body">
                            8
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-statistic-2">
                    <div class="card-icon bg-success text-white">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Completed</h4>
                        </div>
                        <div class="card-body">
                            5
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-statistic-2">
                    <div class="card-icon bg-warning text-white">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pending</h4>
                        </div>
                        <div class="card-body">
                            1
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-statistic-2">
                    <div class="card-icon bg-danger text-white">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Canceled</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- REVENUE --}}
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Revenue Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                <h6>Today</h6>
                                <h5 class="text-primary">Rp0</h5>
                            </div>
                            <div class="col">
                                <h6>This Month</h6>
                                <h5 class="text-success">Rp0</h5>
                            </div>
                            <div class="col">
                                <h6>This Year</h6>
                                <h5 class="text-info">Rp0</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- REVIEWS & CATEGORIES --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Store Information</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total Reviews</span>
                                <strong>2</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total Brands</span>
                                <strong>13</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total Categories</span>
                                <strong>11</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- ADMIN / SUPER ADMIN ONLY --}}
        @can('admin-access')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>System Overview</h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <h6>Total Users</h6>
                                    <h5>51</h5>
                                </div>
                                <div class="col-md-3">
                                    <h6>Vendors</h6>
                                    <h5>6</h5>
                                </div>
                                <div class="col-md-3">
                                    <h6>Subscribers</h6>
                                    <h5>7</h5>
                                </div>
                                <div class="col-md-3">
                                    <h6>Blogs</h6>
                                    <h5>8</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endcan

    </section>
@endsection
