@extends('layouts.app')
@section('title', 'Withdraw Method')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Withdraw Methods</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Available Methods</h4>
                    <a href="{{ route('super_admin.withdraw_method.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Method
                    </a>

                </div>

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Min Amount</th>
                                <th>Max Amount</th>
                                <th>Charge</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bank Transfer</td>
                                <td>Rp100.000</td>
                                <td>Rp10.000.000</td>
                                <td>2%</td>
                                <td>
                                    {{-- <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button> --}}
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    <a href="{{route('super_admin.withdraw_method.edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection


