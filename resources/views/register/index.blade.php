@extends('layouts.main')

@section('container')
  <div class=" d-flex min-vh-100 ">

    <form class="form-registration m-auto d-flex flex-column gap-3" style="width: 100%;max-width: 440px" action="/register"
      method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-medium">Register your account</h1>
      <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
          placeholder="name@example.com " name="name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
          <div id="name" class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror

      </div>
      <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
          placeholder="name@example.com" name="username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
          <div id="username" class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
          placeholder="name@example.com" name="email" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
          <div id="email" class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password"
          placeholder="Password" name="password" required>
        <label for="password">Password</label>
        @error('password')
          <div id="password" class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button class="btn btn-primary w-100 py-2 my-3" type="submit">Submit</button>
      <small>Already have an account? <a href="/login">Login here</a></small>
    </form>
  </div>
@endsection
