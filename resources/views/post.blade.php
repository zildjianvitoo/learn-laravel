@extends('layouts.main')

@section('container')
    <div style="margin-top: 4rem">
        <h1>
            Judul: {{ $post->title }}
        </h1>
        <h3>Author: {{ $post->author }}</h3>
        <h5>{{ $post->body }}</h5>
    </div>
@endsection
