@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        <div style="margin-top: 2rem">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h2>
            <h3>By:
                <a href="/users/{{ $post->user->username }}" class="text-decoration-none">
                    {{ $post->user->name }}

                </a>
                in
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a>
            </h3>
            <h5>{{ $post->excerpt }}</h5>
        </div>
    @endforeach
@endsection
