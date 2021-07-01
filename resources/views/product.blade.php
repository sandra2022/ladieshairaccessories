@extends('master')
@section("content")
<div class="container custom-product">
<style>
.checkbox{
  display: none !important;
}
.checked-clr{
  color: red;
}
.unchecked-clr{
  color:blue;
}
</style>
<script>
function myFunction(id){
  var checkBox = document.getElementById(id);
  var labelId = id.match(/\d/g).join("");
  var label = document.getElementById("favoriteStyle"+labelId);
  if(checkBox.checked == true){
    label.style.color = "magenta";
    document.getElementById("cartSubmit"+labelId).click();
  }else{
    label.style.color = "blue";
    document.getElementById("removeCart"+labelId).click();
  }
}
</script>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach($products as $item)
  <div class="item {{$item['id']==1?'active':''}}"> 
  <a href="/detail/{{$item['id']}}">
      <img class="slider-img" src="{{$item['gallery']}}" >
      <div class="carousel-caption">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
    </div>
  @endforeach 
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="trending-wrapper">
<h3>Trending Products</h3>
<br><br>
@foreach($products as $item)
<div class="trending-item">
@if(Session::has('user'))
@if(Session::get('user')['id'] != 0)
<form action="/add_to_cart" method="POST">
@csrf
@if(Session::get('user')['id'] == $item['user_id'])
<input type="checkbox" class="checkbox" id="favorite{{$item['id']}}" onclick="myFunction(this.id)" name="product_id" checked value="{{$item['id']}}">
@else
<input type="checkbox" class="checkbox" id="favorite{{$item['id']}}" onclick="myFunction(this.id)" name="product_id" value="{{$item['id']}}">
@endif
<label class="glyphicon glyphicon-heart {{Session::get('user')['id']==$item['user_id']?'checked-clr':'unchecked-clr'}}" for="favorite{{$item['id']}}" id="favoriteStyle{{$item['id']}}" style="margin-right: 10px;cursor: pointer;"></label>
<input type="submit" id="cartSubmit{{$item['id']}}" class="hidden">
</form>
<a href="/removecart/{{$item['cart_id']}}" id="removeCart{{$item['id']}}" class="btn btn-warning hidden"></a>
@endif
@endif
<a href="/detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}" >
      <div class="">
        <h3>{{$item['name']}}</h3>
      </div>
    </a>
    </div>
  @endforeach 
  </div>
</div>
</div>
@endsection 