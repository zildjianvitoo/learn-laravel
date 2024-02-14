@extends('layouts.main')
@section('container')
<h1>Jumlah Blog {{ count($posts) }}</h1>


<div class="mt-5">
    @foreach ($posts as $post)
    <article class="mt-5">
        <h2>
            <a href="/blog/{{ $post['slug'] }}">
                {{ $post['title'] }}
            </a>
        </h2>
        <h5> {{ $post['author'] }}</h5>
        <p> {{ $post['body'] }}</p>
    </article>
    @endforeach

</div>
@endsection