@extends('layouts.app')
@section('title', 'Pending Vendors')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Pending Vendors</h1>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Shop Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($vendors as $item)
                    <tr>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->shop_name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <form action="{{ route('super_admin.pending_vendor.approve', $item->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-success btn-sm">Approve</button>
                            </form>

                            <form action="{{ route('super_admin.pending_vendor.reject', $item->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-sm">Reject</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada vendor pending</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
@endsection
