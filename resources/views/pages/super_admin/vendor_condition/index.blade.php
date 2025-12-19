@extends('layouts.app')
@section('title','Vendor Condition')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Vendor Terms & Conditions</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Update Vendor Condition</h4>
            </div>

            <div class="card-body">
                <form>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control summernote" rows="12">
<h3>Vendor Terms and Conditions</h3>
<p><strong>Syarat dan Ketentuan Mitra Milos</strong></p>

<p>Selamat datang di MilosShop sebagai mitra vendor kami.</p>

<ol>
    <li>
        <strong>Pendaftaran dan Verifikasi</strong><br>
        Vendor wajib memberikan data yang valid dan lengkap.
    </li>
    <li>
        <strong>Kualitas Produk</strong><br>
        Produk harus sesuai deskripsi dan standar hukum.
    </li>
    <li>
        <strong>Harga dan Komisi</strong><br>
        Komisi ditentukan sesuai kesepakatan.
    </li>
</ol>
                        </textarea>
                    </div>

                    <button class="btn btn-success">
                        <i class="fas fa-save"></i> Save Changes
                    </button>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
