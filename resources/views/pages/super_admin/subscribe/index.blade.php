@extends('layouts.app')
@section('title','Subscribers')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Subscribers</h1>
    </div>

    <div class="row">

        {{-- SEND EMAIL --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Send Message</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <button class="btn btn-primary btn-block">
                            <i class="fas fa-paper-plane"></i> Send
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- TABLE --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Verified</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>user@gmail.com</td>
                                <td><span class="badge badge-success">Yes</span></td>
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

    </div>
</section>
@endsection
