@extends('layouts.app')
@section('title', 'Super Admin Dashboard')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Super Admin Dashboard</h1>
        </div>

        <div class="section-body">
            <div class="row">

                @php
                    $cards = [
                        ['Total Orders', 8, 'primary', 'shopping-cart'],
                        ['Pending Orders', 1, 'warning', 'clock'],
                        ['Canceled Orders', 0, 'danger', 'times-circle'],
                        ['Completed Orders', 5, 'success', 'check-circle'],

                        ['Today Earnings', 'Rp0', 'info', 'money-bill-wave'],
                        ['Month Earnings', 'Rp0', 'info', 'wallet'],
                        ['Year Earnings', 'Rp0', 'info', 'chart-line'],

                        ['Reviews', 2, 'secondary', 'star'],
                        ['Brands', 13, 'primary', 'tags'],
                        ['Categories', 11, 'primary', 'list'],
                        ['Blogs', 8, 'warning', 'blog'],
                        ['Subscribers', 7, 'warning', 'bell'],
                        ['Vendors', 6, 'success', 'store'],
                        ['Users', 51, 'dark', 'users'],
                    ];
                @endphp

                @foreach ($cards as [$title, $value, $color, $icon])
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-{{ $color }}">
                                <i class="fas fa-{{ $icon }}"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>{{ $title }}</h4>
                                </div>
                                <div class="card-body">{{ $value }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
