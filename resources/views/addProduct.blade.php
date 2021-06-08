@extends('master')
@section("content")
<div class="container custom-product">
<div class="col-sm-12">
<div class="trending-wrapper" style="text-align:center">
<h4>Add Product</h4>

<style>
.form-group{
    display:flex;
}
.label-pos{
    position: relative;
    right: 15px;
    top: 5px;
    min-width: 100px;
    text-align: left;
}
</style>
<br><br>
<form action="/saveProduct" method="POST" style="display: inline-block;min-width: 40%;">
@csrf
<div class="form-group">
    <label for="name" class="label-pos">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="price" class="label-pos">Price</label>
    <input type="text" name="price" class="form-control" id="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="category" class="label-pos">Category</label>
    <input type="text" name="category" class="form-control" id="category" placeholder="Category">
  </div>
  <div class="form-group">
    <label for="desc" class="label-pos">Description</label>
    <textarea name="description" placeholder="Description" class="form-control" id="desc"></textarea>
  </div>
  <div class="form-group">
    <label for="link" class="label-pos">Link</label>
    <input type="text" name="gallery" class="form-control" id="link" placeholder="Link">
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
  
</form>
  </div>
</div>
</div>
@endsection 

   

   