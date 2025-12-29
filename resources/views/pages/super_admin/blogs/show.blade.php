@extends('layouts.app')

@section('title', $blog->title)

@section('main')
<section class="section">
    <div class="section-header">
        <h1>{{ $blog->title }}</h1>
    </div>

    <div class="card mb-4">
        @if($blog->image)
            <img src="{{ asset('storage/'.$blog->image) }}" class="card-img-top">
        @endif

        <div class="card-body">
            {!! $blog->content !!}
        </div>
    </div>

    {{-- COMMENT LIST --}}
    <h5>Comments ({{ $blog->comments->count() }})</h5>

    @foreach ($blog->comments as $comment)
        <div class="card mb-2">
            <div class="card-body">
                <strong>{{ $comment->user->name ?? 'Guest' }}</strong>
                <small class="text-muted">
                    {{ $comment->created_at->diffForHumans() }}
                </small>
                <p class="mb-0">{{ $comment->comment }}</p>
            </div>
        </div>
    @endforeach

    {{-- COMMENT FORM --}}
    @auth
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('blogs.comment.store', $blog->id) }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Leave a Comment</label>
                        <textarea name="comment"
                                  class="form-control"
                                  rows="4"
                                  required></textarea>
                    </div>

                    <button class="btn btn-primary">
                        Submit Comment
                    </button>
                </form>
            </div>
        </div>
    @else
        <p class="text-muted mt-3">
            Please <a href="{{ route('login') }}">login</a> to comment.
        </p>
    @endauth
</section>
@endsection
