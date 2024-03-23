@extends('dashboard.layouts.main')


@section('main')
  <div class="mt-3">
    <a href="/dashboard/posts/create">
      <button class="btn btn-primary">Create New Post
      </button>
    </a>
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
              <a href="/dashboard/posts/edit">
                <button class=" btn btn-primary">Edit</button>
              </a>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
