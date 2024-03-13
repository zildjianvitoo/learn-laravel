@extends('layouts.main')

@section('container')
  <div class=" d-flex min-vh-100 ">
    <form class="form-registration m-auto " style="width: 100%;max-width: 440px">
      <h1 class="h3 mb-3 fw-medium">Register your account</h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="name" placeholder="name@example.com" name="name">
        <label for="name">Name</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="username" placeholder="name@example.com" name="username">
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        <label for="password">Password</label>
      </div>
      <button class="btn btn-primary w-100 py-2 my-3" type="submit">Submit</button>
      <small>Already have an account? <a href="/login">Login here</a></small>
    </form>
  </div>
@endsection
