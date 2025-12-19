@extends('layouts.app')
@section('title', 'about page')

@section('main')
    <section class="section">
        <div class="section-header">
            <h1>About page</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Update About Page</h4>
                </div>

                <div class="card-body">
                    <form>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control summernote" rows="12">
<h3>about page milosgo</h3>
<p><strong>Syarat dan Ketentuan Mitra Milos</strong></p>

<p>Selamat datang di MilosShop</p>

<ol>
    <li>
        <strong>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam atque corporis repellendus esse similique ratione amet voluptatum! Veniam placeat corporis laborum, officia, magni dolores molestiae at nulla est, numquam inventore optio quibusdam impedit aliquam iure suscipit nostrum. Dolor, eligendi nobis!
        </strong>
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
