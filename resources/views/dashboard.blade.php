@extends('master')
@section("content")
<div class="container custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h4>Now You Are Viewing Your Customer's Details</h4>
<br><br>
@foreach($users as $users)
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="row" style="display:flex;border-bottom: 1px solid #c1c1c1;padding-top: 15px;">
        <div class="col-md-4">{{$users->name}}</div>
        <div class="col-md-4">{{$users->email}}</div>
        @if($users->user_id > 0)
        <div class="col-md-4"><a href="/orders/{{$users->user_id}}">Orders</a></div>
        @else
        <div class="col-md-4">Orders not placed</div>
        @endif
        <br><br>
      </div>
      <div class="col-md-1"></div>
    </div>
    </div>
  @endforeach 
  </div>
</div>
</div>
<!-- <style>
.dash-link{

}
</style> -->
@endsection 

   

   