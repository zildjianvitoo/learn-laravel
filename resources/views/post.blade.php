@extends('layouts.main')

@section('container')
    <article style="margin-top: 4rem">
        <h1>
            {{ $post->title }}
        </h1>
        <h3>By : <a href="/users/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}
            </a>
        </h3>
        <h5>{{ $post->body }}</h5>
    </article>
@endsection
