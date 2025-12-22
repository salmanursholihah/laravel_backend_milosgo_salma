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
                    <a href="{{ route('super_admin.cupons.create') }}"
                       class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Coupon
                    </a>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Discount</th>
                                <th>Period</th>
                                <th>Status</th>
                                <th width="15%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cupons as $cupon)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cupon->name }}</td>
                                    <td><strong>{{ $cupon->code }}</strong></td>
                                    <td>
                                        @if ($cupon->discount_type === 'percentage')
                                            <span class="badge badge-info">
                                                {{ $cupon->discount }}%
                                            </span>
                                        @else
                                            <span class="badge badge-secondary">
                                                {{ $cupon->discount }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($cupon->start_date)->format('d M Y') }}
                                        -
                                        {{ \Carbon\Carbon::parse($cupon->end_date)->format('d M Y') }}
                                    </td>
                                    <td>
                                        @if ($cupon->status)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('super_admin.cupons.destroy', $cupon->id) }}"
                                              method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Delete this coupon?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        No coupons found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
