@extends('master')
@section("content")
<div class="container custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h4>My Orders</h4>
<br><br>
@foreach($orders as $item)
<div class="row serached-item!cart-list-divider"> 
<div class="col-sm-3">
<a href="/detail{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}" >
    </a>
    </div>
    <div class="col-sm-4">
      <div class="">
        <h2>Name  :  {{$item->name}}</h2>
        <h5>Delivery Status :  {{$item->status}}</h5>
        <h5>Address :  {{$item->address}}</h5>
        <h5>Payment Method :  {{$item->payment_method}}</h5>
        <br><br>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="">
        <h2>Billing Details</h2>
        <h5>Amount :  $ {{$item->price}}</h5>
        <h5>Tax :  $ 0</h5>
        <h5>Delivery : $ 10</h5>
        <h5>Total Amount :  $ {{$item->price+10}}</h5>
        <br><br>
      </div>
    </div>
      </div>
  @endforeach 
  </div>
</div>
</div>
@endsection 