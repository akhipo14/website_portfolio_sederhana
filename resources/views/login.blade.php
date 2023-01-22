@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-4">

  <main class="form-signin w-100 m-auto">
    <form action="/login" method="post">
      @csrf
      @if (session()->has('errorLogin'))
        <div class="alert alert-danger" role="alert">
          {{ session('errorLogin') }}
        </div>
      @endif

      <h1 class="h3 mb-3 mt-3 fw-normal text-center">Please sign in</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
    </form>
  </main>
  </div>
</div>

@endsection
