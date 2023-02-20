@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 me-5">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>
                By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-5" style="overflow:hidden;">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="btn btn-primary text-decoration-none mb-4"><i class="bi bi-grid-3x3-gap"></i> Back to Posts</a>
        </div>

        @include('terbaru')
        {{-- @include('comments') --}}




    </div>

</div>
@endsection

