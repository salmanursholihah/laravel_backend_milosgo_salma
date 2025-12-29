@extends('layouts.app')
@section('title','Withdraw Methods')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Withdraw Methods</h1>
        <div class="section-header-button">
            <a href="{{ route('super_admin.withdraw-methods.create') }}" class="btn btn-primary">
                Add Method
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Min</th>
                        <th>Max</th>
                        <th>Charge</th>
                        <th>Status</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($methods as $method)
                    <tr>
                        <td>{{ $method->name }}</td>
                        <td>{{ number_format($method->minimum_amount) }}</td>
                        <td>{{ number_format($method->maximum_amount) }}</td>
                        <td>{{ number_format($method->withdraw_charge) }}</td>
                        <td>
                            <span class="badge badge-{{ $method->status ? 'success':'danger' }}">
                                {{ $method->status ? 'Active':'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('super_admin.withdraw-methods.edit',$method->id) }}"
                               class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
