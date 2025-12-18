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
 ['Today’s Orders',0],
 ['Today’s Pending Orders',0],
 ['Total Orders',0],
 ['Total Pending Orders',0],
 ['Completed Orders',0],
 ['Total Products',0],
 ['Today’s Earnings','Rp0'],
 ['This Month Earnings','Rp0'],
 ['This Year Earnings','Rp0'],
 ['Total Earnings','Rp0'],
 ['Total Reviews',0],
 ['Shop Profile','-'],
];
@endphp

@foreach($cards as [$title,$value])
<div class="col-lg-4 col-md-6 col-sm-12">
  <div class="card bg-primary text-white">
    <div class="card-body text-center">
      <i class="fas fa-shopping-cart fa-2x mb-2"></i>
      <h6>{{ strtoupper($title) }}</h6>
      <h4>{{ $value }}</h4>
    </div>
  </div>
</div>
@endforeach

            </div>
        </div>
    </section>
@endsection

