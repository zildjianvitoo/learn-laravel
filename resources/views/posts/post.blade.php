@extends('layouts.main')

@section('container')
  <article style="margin-top: 2rem" class="container">
    <div class="row justify-content-center ">
      <div class="col-md-8 ">
        <h1>
          {{ $post->title }}
        </h1>
        <h5>By : <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
          in
          <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none ">
            {{ $post->category->name }}
          </a>
        </h5>
        @if ($post->image)
          <div class="relative">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
              style="object-fit: cover; overflow: hidden; max-width: 1200px; max-height: 450px;" />
          </div>
        @else
          <img src="https://source.unsplash.com/1200x450/?{{ $post->category->slug }}" alt="unsplash image"
            class="img-fluid mt-2" />
        @endif
        <p class="fs-5 fw-normal">{!! $post->body !!}</p>
        <a href="/posts" class="mt-2">Back to Posts</a>
      </div>

    </div>
  </article>
@endsection
