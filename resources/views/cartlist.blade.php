@extends('master')
@section("content")
<div class="container custom-product">
<style>
.checkbox{
  display: none !important;
}
</style>
<script>
function myFunction(id){
  var checkBox = document.getElementById(id);
  var labelId = id.match(/\d/g).join("");
  var label = document.getElementById("favoriteStyle"+labelId);
  if(checkBox.checked == true){
    label.style.color = "magenta";
  }else{
    label.style.color = "blue";
  }
}
</script>
<div class="col-sm-10">
<div class="trending-wrapper">
<div class="row">
    <div class="col-sm-7">
      <h4>Result For Products</h4>
    </div>
    <div class="col-sm-3">
    @if(count($products) != 0)
      <h4>
        <form action="/orderMany" method="GET">
          <button type="sumbit" class="btn btn-primary">Order all</button>
        </form>
      </h4>
      @endif
    </div>
</div>
<br><br>
@foreach($products as $item)
<div class="row serached-item!cart-list-divider"> 
<div class="col-sm-3">
<a href="/detail/{{$item->id}}">
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
     <a class="btn btn-success" href="ordernow/{{$item->id}}">Order Now</a><br><br>
      </div>
      </div>
  @endforeach 
  </div>
  
</div>
</div>
@endsection 