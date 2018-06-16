<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\ProductCategory;
use App\Order;
use Auth;


class ShoppingController extends Controller
{
    public function add_to_cart()
    {
       // dd(request()->all());
        $pdt = Product::find(request()->pdt_id);
        //dd($pdt->sale_price);
        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price,
            'list_price' => $pdt->list_price,
            'sale_price' => $pdt->sale_price,
        ]);


       
        //dd(Cart::content());
        Cart::associate($cartItem->rowId, 'App\Product');
        return redirect()->route('cart');
           //dd(Cart::content());
        
    }

    public function cart(){
        //dd("pankaj");
        //dd(Cart::content());
        //Cart::destroy();
        $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
         $sale_products = Product::orderBy('created_at', 'desc')->where('sale_price', '>' , 0)->take(3)->get();
         
        return view('shopping.index')->with('sale_products', $sale_products)
                ->with('product_categories', $product_categories);
    }

    public function cart_delete($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function incr($id, $qty){
        Cart::update($id, $qty + 1 );

        return redirect()->back();
    }

    public function decr($id, $qty){
        Cart::update($id, $qty - 1 );

        return redirect()->back();
    }
     public function rapid_add($id){
        
        $pdt = Product::find($id);
        $price1=0;
        if($pdt->sale_price > 0){
            $price1=$pdt->sale_price;
        }
        if($pdt->sale_price == 0){
            $price1=$pdt->price;
        }

        $cartItem = Cart::add([
            
            'id' => $pdt->id,

            'name' => $pdt->name,
            'qty' => 1,

            'price' => $price1,

            

        ]);
        Cart::associate($cartItem->rowId, 'App\Product');
       return redirect()->route('cart');
     // return redirect()->back();
    }
}
