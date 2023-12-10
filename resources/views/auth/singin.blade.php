@extends('layouts.app')
@section('title', $title)

@section('container')

<div class="container" style="margin-top: 20vh;">
  <h3 class="text-center my-4">Sign in</h3>
  <form action="">
    <div class="row">
      <div class="col-4 mx-auto">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">Email address</label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4 mx-auto">
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4 mx-auto">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </div>
  </form>
</div>

@endsection