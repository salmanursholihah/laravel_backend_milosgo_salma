@extends('layouts.app')
@section('title','Messages')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Messages</h1>
    </div>

    <div class="section-body">
        <div class="row">

            {{-- CONTACT LIST --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Chats</h4>
                    </div>

                    <div class="card-body p-0">
                        <ul class="list-unstyled list-unstyled-border">

                            {{-- ACTIVE CHAT --}}
                            <li class="media active">
                                <img class="mr-3 rounded-circle" width="40"
                                    src="https://ui-avatars.com/api/?name=Admin">
                                <div class="media-body">
                                    <div class="float-right text-primary">Just now</div>
                                    <div class="media-title">Admin</div>
                                    <span class="text-small text-muted">
                                        Paket 3GB aktif hari ini
                                    </span>
                                </div>
                            </li>

                            {{-- CHAT ITEM --}}
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="40"
                                    src="https://ui-avatars.com/api/?name=LinkAja">
                                <div class="media-body">
                                    <div class="float-right">10:34 AM</div>
                                    <div class="media-title">LinkAja</div>
                                    <span class="text-small text-muted">
                                        Transaksi berhasil
                                    </span>
                                </div>
                            </li>

                            <li class="media">
                                <img class="mr-3 rounded-circle" width="40"
                                    src="https://ui-avatars.com/api/?name=Customer">
                                <div class="media-body">
                                    <div class="float-right">Yesterday</div>
                                    <div class="media-title">Customer</div>
                                    <span class="text-small text-muted">
                                        Terima kasih admin
                                    </span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            {{-- CHAT AREA --}}
            <div class="col-md-8">
                <div class="card chat-box" id="mychatbox">
                    <div class="card-header">
                        <h4>Admin</h4>
                    </div>

                    <div class="card-body chat-content">

                        {{-- INCOMING MESSAGE --}}
                        <div class="chat-item chat-left">
                            <img src="https://ui-avatars.com/api/?name=Admin">
                            <div class="chat-details">
                                <div class="chat-text">
                                    Selamat! Paket 3GB aktif hari ini.
                                </div>
                                <div class="chat-time">08:30 AM</div>
                            </div>
                        </div>

                        {{-- OUTGOING MESSAGE --}}
                        <div class="chat-item chat-right">
                            <img src="https://ui-avatars.com/api/?name=You">
                            <div class="chat-details">
                                <div class="chat-text">
                                    Baik, terima kasih informasinya.
                                </div>
                                <div class="chat-time">08:31 AM</div>
                            </div>
                        </div>

                        <div class="chat-item chat-left">
                            <img src="https://ui-avatars.com/api/?name=Admin">
                            <div class="chat-details">
                                <div class="chat-text">
                                    Jika ada kendala silakan hubungi kami kembali.
                                </div>
                                <div class="chat-time">08:32 AM</div>
                            </div>
                        </div>

                    </div>

                    {{-- CHAT INPUT --}}
                    <div class="card-footer chat-form">
                        <form>
                            <input type="text" class="form-control"
                                placeholder="Type a message...">
                            <button class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
