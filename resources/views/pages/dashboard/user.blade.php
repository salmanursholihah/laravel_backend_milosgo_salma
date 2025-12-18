@extends('layouts.app')
@section('title','User Dashboard')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>My Dashboard</h1>
    </div>

    <div class="section-body">
        <div class="row">

            @php
            $items = [
                ['My Orders',8,'primary','shopping-bag'],
                ['Pending Orders',1,'warning','clock'],
                ['Completed Orders',5,'success','check-circle'],
                ['My Reviews',2,'info','star'],
                ['My Address',1,'secondary','map-marker-alt'],
            ];
            @endphp

            @foreach($items as [$title,$value,$color,$icon])
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-{{ $color }}">
                        <i class="fas fa-{{ $icon }}"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header"><h4>{{ $title }}</h4></div>
                        <div class="card-body">{{ $value }}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
