@extends('layouts.app')

@section('title', 'brands')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>brands</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">E-Commerce</div>
            <div class="breadcrumb-item active">brands</div>
        </div>
    </div>

<label for="name">Name</label>
<input type="text" name="name" class="form-control">
<label for="slug">Slug</label>
<input type="text" name="slug" class="form-control">
<label for="logo">Logo</label>
<input type="file" name="logo" class="form-control">
<label for="status">Status</label>
<select name="status" class="form-control">
</div>
</div>
@endsection
