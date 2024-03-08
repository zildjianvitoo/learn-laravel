@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>

    @if ($posts->count() == 0)
        <h3>Tidak ada postingan</h3>
    @else
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->slug }}" class="card-img-top"
                alt="unsplash image">
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">
                        {{ $posts[0]->title }}
                    </a>
                </h3>
                <h5>By:
                    <a href="/users/{{ $posts[0]->user->username }}" class="text-decoration-none">
                        {{ $posts[0]->user->name }}

                    </a>
                    in
                    <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">
                        {{ $posts[0]->category->name }}
                    </a>

                    <small class="text-body-secondary card-text ">
                        Last update {{ $posts[0]->updated_at->diffForHumans() }}
                    </small>

                </h5>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <button class="btn btn-primary">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-white">
                        Read more
                    </a>
                </button>
            </div>
        </div>
        <div class="row ">
            @foreach ($posts->skip(1) as $post)
                <div style="margin-top: 2rem" class="col-sm-6 col-lg-4  d-flex align-items-stretch">
                    <div class="card">
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->slug }}" class="card-img-top"
                            alt="image unsplash" />
                        <article class="card-body">
                            <h3 class="card-title">
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <h6 class="card-text">By:
                                <a href="/users/{{ $post->user->username }}" class="text-decoration-none">
                                    {{ $post->user->name }}

                                </a>
                                <small>
                                    <p class="text-body-secondary">
                                        Last update {{ $post->updated_at->diffForHumans() }}
                                    </p>
                                </small>
                            </h6>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <button class="btn btn-primary mt-auto d-flex align-items-end justify-content-end">
                                <a href="/posts/{{ $post->slug }}" class="text-white text-decoration-none">
                                    Read more
                                </a>
                            </button>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
