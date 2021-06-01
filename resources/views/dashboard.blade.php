@extends('master')
@section("content")
<div class="container custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h4>Now You Are Viewing Your Customer's Details</h4>
<br><br>
@foreach($users as $users)
<div class="row serached-item!cart-list-divider"> 
<div class="col-sm-3">
    </div>
    <div class="col-sm-4">
      <div class="">
        <h2>Name  :  {{$users->name}}</h2>
        <h5>Email :  {{$users->email}}</h5>
        <h5>Created :  {{$users->created_at}}</h5>
        <br><br>
      </div>
    </div>
      </div>
  @endforeach 
  </div>
</div>
</div>
@endsection 

   

   