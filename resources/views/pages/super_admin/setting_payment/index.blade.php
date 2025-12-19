@extends('layouts.app')

@section('title', 'Payment Settings')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Payment Settings</h1>
    </div>

    <div class="section-body">
        <div class="row">

            {{-- Payment Menu --}}
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        PayPal
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Stripe
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        COD
                    </a>
                </div>
            </div>

            {{-- Form --}}
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>PayPal Configuration</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option>Enable</option>
                                    <option>Disable</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Mode</label>
                                <select class="form-control">
                                    <option>Sandbox</option>
                                    <option>Live</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Currency</label>
                                <input type="text" class="form-control" value="IDR">
                            </div>

                            <div class="form-group">
                                <label>Client ID</label>
                                <input type="text" class="form-control" value="PAYPAL_CLIENT_ID">
                            </div>

                            <div class="form-group">
                                <label>Secret Key</label>
                                <input type="password" class="form-control" value="PAYPAL_SECRET">
                            </div>

                            <button class="btn btn-success">
                                <i class="fas fa-save"></i> Save Configuration
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
