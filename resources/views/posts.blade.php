@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <div style="margin-top: 4rem">
            <h1>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h1>
            <h3>Author: <a href="/users/{{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a></h3>
            <h5>{{ $post->excerpt }}</h5>
        </div>
    @endforeach
@endsection
