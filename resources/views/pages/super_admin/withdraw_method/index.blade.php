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
@foreach ($methods as $method)
<tr>
    <td>{{ $method->id }}</td>
    <td>{{ $method->name }}</td>
    <td>Rp{{ number_format($method->min_amount) }}</td>
    <td>Rp{{ number_format($method->max_amount) }}</td>
    <td>{{ $method->charge }}%</td>
    <td>
        <a href="{{ route('super_admin.withdraw_method.edit', $method->id) }}"
           class="btn btn-sm btn-warning">
           <i class="fas fa-edit"></i>
        </a>

        <form action="{{ route('super_admin.withdraw_method.destroy', $method->id) }}"
              method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger"
                    onclick="return confirm('Yakin hapus?')">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    </td>
</tr>
@endforeach
</tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection


