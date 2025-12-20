@extends('layouts.app')

@section('title', 'Payment Settings')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>Payment Settings</h1>
        </div>

        <div class="section-body">
            <div class="row">

                {{-- LEFT MENU --}}
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active payment-menu"
                            data-target="paypal">
                            <i class="fab fa-paypal mr-2"></i> PayPal
                        </a>

                        <a href="#" class="list-group-item list-group-item-action payment-menu" data-target="stripe">
                            <i class="fas fa-credit-card mr-2"></i> Stripe
                        </a>

                        <a href="#" class="list-group-item list-group-item-action payment-menu" data-target="cod">
                            <i class="fas fa-money-bill-wave mr-2"></i> Cash On Delivery
                        </a>
                    </div>
                </div>

                {{-- RIGHT CONTENT --}}
                <div class="col-md-9">

                    {{-- PAYPAL --}}
                    <div class="payment-content" id="paypal">
                        <div class="card">
                            <div class="card-header">
                                <h4>PayPal Configuration</h4>
                            </div>
                            <div class="card-body">
                                @includeIf('pages.super_admin.setting_payment.paypal')
                            </div>
                        </div>
                    </div>

                    {{-- STRIPE --}}
                    <div class="payment-content d-none" id="stripe">
                        <div class="card">
                            <div class="card-header">
                                <h4>Stripe Configuration</h4>
                            </div>
                            <div class="card-body">
                                @includeIf('pages.super_admin.setting_payment.stripe')
                            </div>
                        </div>
                    </div>

                    {{-- COD --}}
                    <div class="payment-content d-none" id="cod">
                        <div class="card">
                            <div class="card-header">
                                <h4>Cash On Delivery Configuration</h4>
                            </div>
                            <div class="card-body">
                                @includeIf('pages.super_admin.setting_payment.cod')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menus = document.querySelectorAll('.payment-menu');
            const contents = document.querySelectorAll('.payment-content');

            menus.forEach(menu => {
                menu.addEventListener('click', function(e) {
                    e.preventDefault();

                    // active menu
                    menus.forEach(m => m.classList.remove('active'));
                    this.classList.add('active');

                    // hide all content
                    contents.forEach(c => c.classList.add('d-none'));

                    // show selected content
                    const target = this.dataset.target;
                    document.getElementById(target).classList.remove('d-none');
                });
            });
        });
    </script>
@endpush
