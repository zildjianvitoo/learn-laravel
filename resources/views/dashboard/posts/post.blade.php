@extends('dashboard.layouts.main')


@section('main')
  <article class="container my-3">
    <div class="row justify-content-center ">
      <div class="col-md-8 ">
        <h1>
          {{ $post->title }}
        </h1>
        <div class="d-flex gap-3">
          <a href="/dashboard/posts" class="btn btn-success my-3">Back to All My Posts</a>
          <a href="/dashboard/posts/edit" class="btn btn-primary my-3">Edit</a>
          <a href="/dashboard/posts/edit" class="btn btn-danger my-3">Delete</a>
        </div>
        <img src="https://source.unsplash.com/1200x450/?{{ $post->category->slug }}" alt="unsplash image"
          class="img-fluid ">
        <p class="fs-5 fw-normal">{!! $post->body !!}</p>
      </div>
    </div>
  </article>
@endsection
