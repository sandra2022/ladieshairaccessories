@extends('master')
@section("content")
<div class="container">
<div clas="row">
<div class="col-sm-6">
<img class="detail-img"src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6">

<h2>{{$product['name']}}</h2>
<h3>Price : {{$product['price']}}</h3>
<h4>Details : {{$product['description']}}</h4>
<h4>Category : {{$product['category']}}</h4>
<br><br>
<form action="/add_to_cart" method="POST">
@csrf
<input type="hidden" name="product_id" value="{{$product['id']}}">
<button class="btn btn-primary">Add to Cart</button>
<br><br>
<button class="btn btn-secondary">Buy Now</button>
<br><br>
<a href="/">Go Back</a>
</form>
<br><br>
</div>
</div>
</div>
<div class="rating-pos">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

.cross {
    padding: 10px;
    color: #d6312d;
    cursor: pointer;
    font-size: 23px
}

.cross i {
    margin-top: -5px;
    cursor: pointer
}

.comment-box {
    padding: 5px
}

.comment-area textarea {
    resize: none;
    border: 1px solid orange;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
}

.send {
    color: #fff;
    background-color: orange;
    border-color: orange;
}

.send:hover {
    color: #fff;
    background-color: #f50202;
    border-color: #f50202
}

.rating {
    display: inline-flex;
    margin-top: -10px;
    flex-direction: row-reverse
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 28px;
    font-size: 35px;
    color: orange;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}
* {
  box-sizing: border-box;
}
.rating-pos{
    max-width: 80%;
    margin: 2% 10% 2% 10%;
}
.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
</head>
<body>
<div>
<span class="heading">User Rating</span>
@for ($i = 0; $i < 5; $i++)
    <div class="rating">
          @if ($i < $avg)
          <input type="radio" name="totalRating" value="{{$i}}" checked><label for="{{$i}}">☆</label>
          @else
          <input type="radio" name="totalRating" value="{{$i}}"><label for="{{$i}}">☆</label>
          @endif
    </div>
@endfor
<span style="float: right">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form">Add your rating</button>
</span>
</div>
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right cross"> <i class="fa fa-times mr-2" class="close" data-dismiss="modal"></i> </div>
            <div class="card-body text-center"> <img src=" https://i.imgur.com/d2dKtI7.png" height="100" width="100">
                <div class="comment-box text-center">
                    <h4>Add a comment</h4>
                    <form action="/addReview" method="POST">
                    @csrf
                        <div class="hidden">
                            <input type="text" name="product_id" value="{{$product['id']}}">
                        </div>
                        <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
                        <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?" name="comment" rows="4"></textarea> </div>
                        <div class="text-center mt-4" style="padding-top:10px;"> <button class="btn btn-success send px-5" type="submit">Add</i></button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<p>{{$avg}} average based on {{count($reviews)}} reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:{{$five}}% !important"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$five}}</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:{{$four}}% !important"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$four}}</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:{{$three}}% !important"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$three}}</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:{{$two}}% !important"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$two}}</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width:{{$one}}% !important"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$one}}</div>
  </div>
</div>

</body>
</div>
<div class="rating-pos">
@foreach($reviews as $review)
<div class="row serached-item!cart-list-divider"> 
<div class="col-sm-4">
<h4>{{$review->name}}</h4>
</div>
<div class="col-sm-4">
</div>
<div class="col-sm-4" style="text-align: right;">
@for ($i = 0; $i < 5; $i++)
    <div class="rating">
          @if ($i < $review->rating)
          <input type="radio" name="rating{{$review->id}}" value="{{$review->id}}" checked><label for="{{$review->id}}">☆</label>
          @else
          <input type="radio" name="rating{{$review->id}}" value="{{$review->id}}"><label for="{{$review->id}}">☆</label>
          @endif
    </div>
@endfor
</div>
</div>
<div class="row serached-item!cart-list-divider"> 
    <div class="col-sm-12">
        <h5>{{$review->comment}}</h5>
    </div>
</div>
  @endforeach 
</div>
@endsection 