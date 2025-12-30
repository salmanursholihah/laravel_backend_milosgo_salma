@extends('layouts.app')
@section('title','Vendors')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Vendor List</h1>
    </div>


    <div class="card">
        <div class="card-body p-0">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Shop</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
           <tbody>
    @forelse ($requests as $request)
        <tr>
            <td>{{ $request->id }}</td>
            <td>{{ $request->user->name }}</td>
            <td>{{ $request->user->email }}</td>
            <td>{{ $request->shop_name }}</td>
            <td>
                <span class="badge badge-info">
                    {{ ucfirst($request->user->role) }}
                </span>
            </td>
            <td>
                <span class="badge badge-success">
                    Approved
                </span>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">
                Tidak ada vendor approved
            </td>
        </tr>
    @endforelse
</tbody>

            </table>
        </div>
    </div>
</section>
@endsection
