<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordersmodel;
use Illuminate\Support\Facades\DB;
class Orders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data=Ordersmodel::all();
        return view('orders',['orders'=>$orders]);
    }

    function orders($id)
    {
      $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->leftjoin('cart','cart.product_id','=','products.id')
         ->where('orders.user_id',$id)
         ->get();
         return view('orders',['orders'=>$orders]);  
    }

    function orderNow($id)
{
    $userId=Session::get('user')['id'];
   $total= $products= DB::table('cart')
    ->join('products','cart.product_id','=','products.id')
    ->where('cart.user_id',$id)
    
    ->sum('products.price');

    return view('orders',['total'=>$total]);  
}
}
