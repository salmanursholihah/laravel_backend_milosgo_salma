@extends('layouts.app')
@section('title','terms Condition')

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Terms Pages</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Update terms Condition</h4>
            </div>

            <div class="card-body">
                <form>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control summernote" rows="12">
<h3> Terms and Conditions</h3>
<p><strong>Syarat dan Ketentuan Mitra Milos</strong></p>

<p>Selamat datang di MilosShop </p>

<ol>
   <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis obcaecati id molestias ad optio placeat amet sit laboriosam architecto sequi!</li>
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
