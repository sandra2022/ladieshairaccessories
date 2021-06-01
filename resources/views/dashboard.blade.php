@extends('master')
@section("content")
<div class="container custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h4>My Orders</h4>
<br><br>
@foreach($orders as $order)
<div class="row serached-item!cart-list-divider"> 
<div class="col-sm-3">
<a href="/detail{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}" >
    </a>
    </div>
    <div class="col-sm-4">
      <div class="">
        <h2>Name  :  {{$order->name}}</h2>
        <h5>Email :  {{$order->status}}</h5>
        <h5>Created :  {{$order->address}}</h5>
        <h5>Payment Method :  {{$order->payment_method}}</h5>
        <br><br>
      </div>
    </div>
      </div>
  @endforeach 
  </div>
</div>
</div>
@endsection 

   