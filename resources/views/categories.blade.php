@extends('layouts.main')

@section('container')
    @foreach ($categories as $category)
        <h1><a href="/categories/{{ $category->slug }}" class="d-block mt-5">{{ $category->name }}</a></h1>
    @endforeach
@endsection
