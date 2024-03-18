@extends('layouts.main')

@section('container')
  <div class=" d-flex flex-column min-vh-100">
    <div class="m-auto" style="width: 100%;max-width: 440px">
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error</strong> {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success</strong> {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form class="form-signin d-flex flex-column gap-3" action="/login" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-medium">Please login</h1>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
            placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control  " id="password" placeholder="Password" name="password" required>
          <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2 my-3" type="submit">Submit</button>
        <small>Not registered? <a href="/register">Register here</a></small>
      </form>
    </div>
  </div>
@endsection
