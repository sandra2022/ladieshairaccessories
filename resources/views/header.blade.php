<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total= ProductController::cartItem();
}
?>
<style>
.scroll-left {
 height: 50px;	
 overflow: hidden;
 position: relative;
 background: yellow;
 color: orange;
 border: 1px solid orange;
}
.scroll-left p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-left {
 0%   {
 transform: translateX(100%); 		
 }
 100% {
 transform: translateX(-100%); 
 }
}
</style>

<div class="scroll-left">
<p><h2><b><i>Welcome To Fashion Atelier -- the complete ladies hair accessories store...</i></b></h2></p>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Fashion Atelier</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/#"><b> Home</b></a></li>
        <li class="active"><a href="/aboutus"><b>About Us</b></a> </li>
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><b>Search</b></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        @if(Session::get('user')['role']==1)
        <li class="active"><a href="/dashboard"><b>Dashboard</b></a> </li>
        @endif
        <li><a href="/cartlist"><b>Cart({{$total}})</b> </a></li>
        <li class="active"><a href="/myorders"><b>Orders</b></a> </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout"><b>Logout</b></a></li>
        </ul>
      </li>
      @else
      <li><a href="/login"><b>Admin Login</b></a></li>
      <li><a href="/register"><b>NewUser Registration & Login</b></a></li>
      @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



