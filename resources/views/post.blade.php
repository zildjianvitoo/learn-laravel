@extends('layouts.main')

@section('container')
    <div style="margin-top: 4rem">
        <h1>
            Judul: {{ $post->title }}
        </h1>
        <h3>By : {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h3>
        <h3>Author: {{ $post->author }}</h3>
        <h5>{{ $post->body }}</h5>
    </div>
@endsection
