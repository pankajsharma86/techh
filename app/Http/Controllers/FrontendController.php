<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;
use App\Comment;
use App\Product;
use Cart;
use Stripe\Stripe;
use Stripe\Charge; 
use Auth;
use App\ProductCategory;
use App\ProductSubCategory;
use App\ProductSecondSubCategory;
use App\Order;
use App\User;
use App\PostCategory;
use Session;
use App\UserSetting;
use Mail;
use App\Seo;
use App\Wishlist;
use Redirect;




class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog_post_thumbnails = Post::orderBy('created_at', 'desc')->take(2)->get();
        //dd($blog_post_thumbnails);
       $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
         $product_subcategories = ProductSubCategory::orderBy('created_at', 'desc')->take(8)->get();
       // $product_secondsubcategories = ProductSecondSubCategory::orderBy('created_at', 'desc')->take(8)->get();
        $sale_products = Product::orderBy('created_at', 'desc')->where('sale_price', '>' , 0)->take(8)->get();
        //dd($sale_products);
         return view('index')->with('product', $product)
                            ->with('sale_products', $sale_products)
                        ->with('blog_post_thumbnails', $blog_post_thumbnails)
                        ->with('product_categories' , $product_categories)
                        ->with('product_subcategories' , $product_subcategories)
                       ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
 public function products()
    {
         $seo = Seo::all();  
        $product = Product::paginate(8);
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        return view('product')->with('product', $product)
                                   ->with('product_categories' , $product_categories)
                                   ->with('seo' , $seo);
       
    }

    public function careers()
    {
         $seo = Seo::all();  
       
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        return view('pages.careers')->with('product_categories' , $product_categories)
                                   ->with('seo' , $seo);
       
    }

     public function blog()
    {
        
        $blog_posts = Post::orderBy('created_at', 'desc')->paginate(3);
        $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        return view('blog/listing')->with('blog_posts', $blog_posts)
                                   ->with('product_categories' , $product_categories);
       
    }
	  public function product_single($slug){
      

            $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
            $product = Product::where('slug', $slug)->first();
            //dd($product->slug);
            $seo = Seo::where('seoble_id', $product->id)->first();;
            //dd($seo->id);
            return view('product_single')->with('product', $product)
            ->with('product_categories' , $product_categories)
            ->with('seo' , $seo);
         }

 public function single($slug)
    {
        //
        
       $post = Post::where('slug', $slug)->first();
         $product = Product::all();
           $seo = Seo::Find($post->id);
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        //dd($post->title);

        return view('blog.blog')->with('post', $post)
                                ->with('product_categories' , $product_categories)->with('seo' , $seo);
       
    }

    public function addcomment(Request $request, $id)
    {
        //
          $post = Post::find($id);
        //dd($post->title);
          $posts_id=$post->id;  
         
        $comment = new Comment; 

        //dd($blogst);
         //dd($request->tags);
      //dd($request);
        $comment->name = $request->comment_name;
        $comment->email = $request->comment_email;
        $comment->comment = $request->comment_comment;
        $comment->posts_id = $posts_id;
        $comment->save();
       // dd("HJ");
       
         return view('blog.blog')->with('post', $post);
                                
       
    }
     public function product_category($slug1,$slug2,$slug){
        
               
           $product_second_sub_category = ProductSecondSubCategory::where('slug', $slug)->first();
            //dd($product_second_sub_categoly->name);
            $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
            //dd("hg");
            $seo = Seo::Findorfail($product_second_sub_category->id);
            //dd($seo);
            return view('secondsubcategory.index')->with('product_categories', $product_categories)
                                                  ->with('product_second_sub_category', $product_second_sub_category)
                                                  ->with('seo', $seo);
         }

 public function product_sub_category($slug1,$slug){
           
            $product_sub_category = ProductSubCategory::where('slug', $slug)->first();
            //dd($product_sub_category->name);
            $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
             $seo = Seo::Find($product_sub_category->id);
            
            return view('subcategory.index')->with('product_categories', $product_categories)
                                                  ->with('product_sub_category', $product_sub_category)->with('seo', $seo);
         }

    public function category($slug){
            //dd($id);
       
            
            //dd($product_category->name);
            $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
              $product_category = ProductCategory::where('slug', $slug)->first();
               $seo = Seo::Find($product_category->id);
            return view('category.index')->with('product_categories', $product_categories)
                                                  ->with('product_category', $product_category)->with('seo', $seo);
         }



    public function about()
    {

         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();

         return view('pages/about')->with('product_categories' , $product_categories);
    }

   public function checkout1()
    {

         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();

         return view('shopping.checkout1')->with('product_categories' , $product_categories);
    }

    public function checkout3()
    {
        //dd(request());
          
         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        //  $user_settings = UserSetting::Find(Auth::user()->id);
         $user_settings=new UserSetting;
        $user_settings->user_id = Auth::user()->id;
        $user_settings->address = request()->address;
        $user_settings->zip = '1010';
        $user_settings->country = 'NZ';
        $user_settings->phone = request()->phone;
        $user_settings->state = 'Auckland';
        $user_settings->name = request()->name;
        $user_settings->street_number = '4545';
        $user_settings->route = 'bus';
        $user_settings->city = 'Auckland cbd';
        $user_settings->save();

        

         return view('shopping.checkout3')->with('product_categories' , $product_categories);
    }

  public function checkout4()
    {
    
        //dd(request()->payment);
         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();

        if(request()->payment == 'payment1') {
           return view('shopping.checkout4')->with('product_categories' , $product_categories);
        }

         
        if(request()->payment == 'payment3') {
           
                return view('shopping.checkout5')->with('product_categories' , $product_categories);        
            }   
            if(request()->payment == 'payment5') {
           
                return view('paywithpaypal')->with('product_categories' , $product_categories);
            }     
    }


    public function checkout6($id)
    {
        $order = Order::Find($id);
        //dd($cartItems = Cart::content());
        //$a = $order->id;
        
        //dd($a->orderItems());
         $user = Auth::user()->id;
         $wishlists = Wishlist::where('user_id', '=', $user)->get();

        $total = $order->total;
         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        // dd($order->orderItems);
         return view('shopping.checkout6')->with('product_categories' , $product_categories)
                                          ->with('order', $order)
                                          ->with('total', $total)->with('wishlists' , $wishlists);
    }

    public function pay()
    {

         $cartItems = Cart::content();

        Stripe::setApiKey("sk_test_BcKAzXuBBXw7I44EcNiK7T2y");

        $charge = Charge::create([
              "amount" => Cart::total() * 100,
              "currency" => "nzd",
              "description" => "Techbasha Payment",
              "source" => request()->stripeToken,
        ]);

       $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0,
            'payment' => 'Visa'
        ]);
        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price,
                'payment_method' => 'Visa'
            ]);
        }

        $data = [
            'cartItems' => $cartItems
        ];

      /*  $a = Mail::send('emails.purchased', $data, function ($message) {
            $message->from('varun7860001@gmail.com');
            $message->to('varun7860001@gmail.com');
        });*/

    
        Session::flash('success', 'Purchase successful. Wait for our email. ');

        Cart::destroy();

        //Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);
        return redirect()->route('home');
    }
     public function mission()
    {

         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();

         return view('pages/mission')->with('product_categories' , $product_categories);
    }

      public function contact()
    {

         $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();

         return view('pages/contact')->with('product_categories' , $product_categories);
    }



    public function cashpay()
    {
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0,
            'payment' => 'Cash'
        ]);
        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price,
                'payment_method' => 'Cash'
            ]);
        }
        Session::flash('success', 'Purchase successful. Wait for our email. ');
        Cart::destroy();
       return redirect()->route('home');
    }


}
