<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Wishlist;
use Session;
use App\ProductCategory;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $pdt = Product::find(request()->pdt_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add($id){
        $pdt = Product::find($id);
        

        $wishlist = new Wishlist;
        $wishlist->user_id = Auth::id();
        if(($wishlist->user_id)==null)
        {
            $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
            return view('auth.login')->with('product_categories' , $product_categories);
        }
        else{

            $wishlist->user_id = Auth::id();
       
        
        $wishlist->product_id = $pdt->id;
        $wishlist->save();
        
        Session::flash('success', 'Product added to wishlist');
        return redirect()->back();
        }
        

      




    }
}
