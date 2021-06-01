@extends('master')
@section("content")
<div class="container custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h4>Result For Products</h4>
<br><br>

@foreach($products as $item)
<div class="row serached-item!cart-list-divider"> 
<div class="col-sm-3">
<a href="/detail{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}" >
    </a>
    </div>
    <div class="col-sm-4">
      <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->category}}</h5>
        <br><br>
      </div>
      </div>
      <div class="col-sm-3">
      <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
     <br><br>
     <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
      </div>
      </div>
  @endforeach 
  </div>
  
</div>
</div>
@endsection 