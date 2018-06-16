<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\wishlist;
use Auth;
use App\Order;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = Auth::user()->id;
      //  dd($user);
         $orders = Order::where('user_id', '=', $user)->get();
         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();

     //    $orders = Order::orderBy('created_at', 'desc')->get();
         //ssdd($orders);
        return view('home')->with('product_categories' , $product_categories)
                        ->with('orders', $orders);
    }

public function wishlist()
    {
            $user = Auth::user()->id;
            $wishlists = Wishlist::where('user_id', '=', $user)->get();
            $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
            
             //dd("hgvjh");
            return view('user.wishlist')
            ->with('product_categories' , $product_categories)
            ->with('wishlists' , $wishlists);
    }

public function showishlist($id, $wid)
    {
        if($id==null){

         $product1 = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        return view('auth.login')->with('product_categories' , $product_categories);
        }
        else
        {
            $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
            $product = Product::Find($id);
            $product1 = Product::all();
            $product_categories1 = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
            return view('user.wishlist')->with('product', $product)
            ->with('product_categories' , $product_categories)
            ;
        }

         
      
    }


}
