@extends('layouts.app')
@section('title', 'Footer Socials')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Footer Socials</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Social Media</h4>
                   <a href="{{route('super_admin.footer_social.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Social Media</a>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><i class="fab fa-instagram"></i></td>
                                <td>Instagram</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    <a href="{{ route('super_admin.footer_social.edit') }}"
                                        class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
