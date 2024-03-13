@extends('layouts.main')

@section('container')
  <div class=" d-flex min-vh-100 ">
    <form class="form-signin m-auto " style="width: 100%;max-width: 440px">
      <h1 class="h3 mb-3 fw-medium">Please login</h1>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>


      <button class="btn btn-primary w-100 py-2 my-3" type="submit">Submit</button>
      <small>Not registered? <a href="/register">Register here</a></small>
    </form>
  </div>
@endsection
