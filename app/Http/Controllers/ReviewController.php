<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
use Session;

class ReviewController extends Controller
{
    function index(){
        
    }
    function addReview(Request $req)
    {
        //return $req->input();
        $userId=Session::get('user')['id'];
        $review=new Review;
        $review->product_id=$req->product_id;
        $review->rating=$req->rating;
        $review->comment=$req->comment;
        $review->user_id=$userId;
        $review->save();
        return redirect()->back();  
    }
}
