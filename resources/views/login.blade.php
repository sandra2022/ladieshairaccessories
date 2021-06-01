@extends('master')
@section("content")

<div class="container customer-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">


<form action="login" method="POST">
  <div class="form-group">
  
  @csrf
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-secondary">Login</button>
  
</form>
</div>
</div>
</div>
@endsection 

