@extends('dashboard.layouts.main')

@section('main')
  <section class=" mt-2 ">
    <h1>Create new Post</h1>
    <div class="row">
      <form action="/dashboard/posts" method="POST" class=" d-flex col-md-8 flex-column gap-3">
        @csrf
        <div>
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
            placeholder="Lorem ipsum" name="title" value="{{ old('title') }}">
          @error('title')
            <p class="invalid-feedback my-0">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div>
          <label for="slug">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror " id="slug"
            placeholder="lorem-ipsum" name="slug" value="{{ old('slug') }}">
          @error('slug')
            <p class="invalid-feedback my-0">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div>
          <label for="category">Category</label>
          <select name="category" class="form-select  @error('category') is-invalid @enderror"
            aria-label="Default select example">
            <option selected disabled>Choose Category</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" @selected(old('category') == $category->id)>
                {{ $category->name }}
              </option>
            @endforeach
          </select>
          @error('category')
            <p class="invalid-feedback my-0">
              {{ $message }}
            </p>
          @enderror

        </div>
        <div>
          <label for="description">Description</label>
          <input id="description" value="{{ old('description') }}" type="hidden" name="description" />
          <trix-editor input="description"></trix-editor>
          @error('description')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
      </form>
    </div>
  </section>

  <script>
    const title = document.getElementById("title")
    const slug = document.getElementById("slug")

    title.addEventListener("change", async () => {
      const resp = await fetch("/dashboard/posts/checkSlug?title=" + title.value);
      const data = await resp.json()
      slug.value = data.slug
    })

    document.addEventListener("trix-file-accept", (e) => {
      e.preventDefault()
    })
  </script>
@endsection
