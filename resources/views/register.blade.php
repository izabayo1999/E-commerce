@extends('master')
@section('content')
<div class="container customer-login" >
    <div class="row">
        <div class=" col-sm-4 col-sm-offset-4">
<form action="register" method="POST">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1" required>User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
  <div class="form-group">
    <label for="exampleInputEmail1" required>Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" required>Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</div>
@endsection
