@extends('layouts.app')
@section('title','Blog Comments')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Blog Comments</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post</th>
                            <th>User</th>
                            <th>Comment</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td>Laravel Tips</td>
                            <td>Salma</td>
                            <td>Nice article 👍</td>
                            <td>
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
