@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <div style="margin-top: 4rem">
            <h1>
                Judul: <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <h3>Author: {{ $post->author }}</h3>
            <h5>{{ $post->body }}</h5>
        </div>
    @endforeach
@endsection
