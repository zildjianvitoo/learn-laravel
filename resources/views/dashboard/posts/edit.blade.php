@extends('dashboard.layouts.main')

@section('main')
  <section class=" my-2 ">
    <h1>Edit Post</h1>
    <div class="row">
      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class=" d-flex col-md-8 flex-column gap-3">
        @csrf
        @method('PATCH')
        <div>
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
            placeholder="Lorem ipsum" name="title" value="{{ old('title') ? old('title') : $post->title }}">
          @error('title')
            <p class="invalid-feedback my-0">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div>
          <label for="slug">Slug</label>
          <input type="text" class="form-control disabled @error('slug') is-invalid @enderror " id="slug"
            placeholder="lorem-ipsum" name="slug" value="{{ old('slug') ? old('slug') : $post->slug }}" disabled>
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
              <option value="{{ $category->id }}" @selected(old('category') == $category->id) @selected($post->category_id == $category->id)>
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
          <input id="description" value="{{ old('description') ? old('description') : $post->body }}" type="hidden"
            name="description" />
          <trix-editor input="description"></trix-editor>
          @error('description')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
      </form>
    </div>
  </section>
@endsection
