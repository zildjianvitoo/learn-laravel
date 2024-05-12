@extends('layouts.main')

@section('container')
  <h1 class="text-center">{{ $title }}</h1>
  <div class="row my-3 justify-content-center">
    <div class="col-md-6">
      <form action="/posts" method="GET">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}" />
        @elseif (request('user'))
          <input type="hidden" name="user" value="{{ request('user') }}" />
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-warning text-white" type="submit" id="button-addon2">Search</button>
        </div>
      </form>
    </div>
  </div>
  @if ($posts->count() == 0)
    <h3 class="text-center">Tidak ada postingan</h3>
  @else
    <div class="card mb-3">
      @if ($posts[0]->image)
        <div class="relative d-flex justify-content-center">
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->title }}"
            style="max-width: 1200px; max-height: 400px; object-fit: cover; overflow: hidden;" class="text-center" />
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->slug }}" class="card-img-top"
          alt="unsplash image" />
      @endif
      <div class="card-body text-center">
        <h3 class="card-title">
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">
            {{ $posts[0]->title }}
          </a>
        </h3>
        <h5>By:
          <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">
            {{ $posts[0]->user->name }}

          </a>
          in
          <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
            {{ $posts[0]->category->name }}
          </a>

          <small class="text-body-secondary card-text ">
            Last update {{ $posts[0]->updated_at->diffForHumans() }}
          </small>

        </h5>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <button class="btn btn-primary">
          <a href="{{ asset('storage/' . $posts[0]->image) }}" class="text-decoration-none text-white">
            Read more
          </a>
        </button>
        <button class="btn btn-success">
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-white">
            Read more
          </a>
        </button>
      </div>
    </div>
    <div class="row">
      @foreach ($posts->skip(1) as $post)
        <div style="margin-top: 2rem" class="col-sm-6 col-lg-4 h-full  d-flex align-items-stretch">
          <div class="card">

            <a href="/posts?category={{ $post->category->slug }}"
              class="position-absolute px-3 py-2 text-decoration-none text-white  cursor-pointer"
              style="border-bottom-right-radius: 8px; background-color: rgba(0, 0, 0, 0.7)">
              {{ $post->category->name }}
            </a>
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                style="overflow:hidden; max-width: 600px; max-height: 200px; object-fit: contain;" />
            @else
              <img src="https://source.unsplash.com/600x300/?{{ $post->category->slug }}" alt="image unsplash" />
            @endif

            <article class="card-body d-flex flex-column">
              <h3 class="card-title">
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                  {{ $post->title }}
                </a>
              </h3>
              <h6 class="card-text">By:
                <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">
                  {{ $post->user->name }}

                </a>
                <small>
                  <p class="text-body-secondary">
                    Last update {{ $post->updated_at->diffForHumans() }}
                  </p>
                </small>
              </h6>
              <p class="card-text">{{ $post->excerpt }}</p>
              <div class="d-flex justify-content-between w-full mt-auto ">
                @if ($post->image)
                  <button class="btn btn-success ">
                    <a href="{{ asset('storage/' . $post->image) }}" class="text-white text-decoration-none" download>
                      Download Image
                    </a>
                  </button>
                @endif
                <button class="btn btn-primary ">
                  <a href="/posts/{{ $post->slug }}" class="text-white text-decoration-none"
                    style="align-self: flex-end">
                    Read more
                  </a>
                </button>
              </div>
            </article>
          </div>
        </div>
      @endforeach
    </div>
    <div class="mt-3">
      {{ $posts->links() }}
    </div>
  @endif
@endsection
