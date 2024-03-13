@extends('layouts.main')

@section('container')
  <h1 class="my-3">{{ $title }}</h1>
  <div class="row">
    @foreach ($categories as $category)
      <div class="col-md-4">
        <a href="/posts?category={{ $category->slug }}" class="d-block mt-2 text-decoration-none text-white">
          <div class="card text-bg-dark ">
            <img src="https://source.unsplash.com/1200x1000/?{{ $category->slug }}" alt="{{ $category->name }}">
            <div class="card-img-overlay p-0 d-flex justify-content-center align-items-center ho">
              <h5 class="card-title px-3 text-center py-4 flex-fill" style="background-color: rgba(0, 0, 0, 0.7)">
                {{ $category->name }}
              </h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
@endsection
