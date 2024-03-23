@extends('dashboard.layouts.main')


@section('main')
  <div class="mt-3">
    <a href="/dashboard/posts/create">
      <button class="btn btn-primary">
        Create New Post
      </button>
    </a>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        <strong>Success</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No. </th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td class="d-flex flex-row gap-3">
              <a href="/dashboard/posts/{{ $post->slug }}">
                <button class=" btn btn-info text-white">Detail</button>
              </a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit">
                <button class=" btn btn-primary">Edit</button>
              </a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
