@extends('master')
@section("content")
<div class="container custom-product">
<div class="col-sm-4">
<a href="#">Filter</a>
</div>
<div class="col-sm-4">
<div class="trending-wrapper">
<h4>Result For Products</h4>
@foreach($products as $item)
<div class="serached-item"> 
<a href="/detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}" >
      <div class="">
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['category']}}</h5>
      </div>
    </a>
    </div>
  @endforeach 
  </div>
</div>
</div>
@endsection 