<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\ProductSubCategory;
use App\ProductSecondSubCategory;
use App\Seo;
use Illuminate\Pagination\Paginator;
use Session;

class ProductController extends Controller
{
    //private $limit = 10;
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.product.index', ['products' => $products]);
    }

    public function create()
    {
        $product_categories = ProductCategory::all();
        $product_sub_categories = ProductSubCategory::all();
        $product_second_sub_categories = ProductSecondSubCategory::all();
        return view('admin.product.create')->with('product_categories', $product_categories)
                                           ->with('product_sub_categories', $product_sub_categories)
                                           ->with('product_second_sub_categories', $product_second_sub_categories);
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'product_pid' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_status' => 'required',
        ]);
       //dd($request->product_second_sub_category);
        if($request->hasFile('product_image')){
        $product_image = $request->product_image;
        $product_image_new_name = time() . $product_image->getClientOriginalName();
        $product_image->move('admin1/uploads/products', $product_image_new_name);
        }

        $product = new Product;
        $product->pid = $request->product_pid;
        
        if($request->product_category != ""){
        $product->product_category_id = $request->product_category;
        }
        
        if($request->product_sub_category != ""){
            $product->product_sub_category_id = $request->product_sub_category;
        }
        if($request->product_second_sub_category != ""){
        $product->product_second_sub_category_id = $request->product_second_sub_category;
        }

        $product->sku = $request->product_pid;
        $product->name = $request->product_name;
        
        $product->price = $request->product_price;
        if($request->product_sale_price == ""){
            $product->sale_price = 0;
        }
        else{
            $product->sale_price = $request->product_sale_price;
        }
        $product->list_price = $request->product_price - $request->product_sale_price;
        $product->weight = $request->product_weight;
        $product->long_desc = $request->product_description;
        $product->short_desc  = $request->product_short_description;
        $product->image = 'admin1/uploads/products/' . $product_image_new_name;
        $product->cart_desc = $request->product_cart_description;
        $product->stock = $request->stock_count;

        if($request->product_status == "1")
            $product->is_live = 1;
        if($request->product_status == "0")
            $product->is_live = 0;
        $product->location = "Laurence Freeway 34510-6284 West Jamel";
        $product->slug = str_slug($request->product_name);
        //dd($request);
        
        $product->save();

        $seo = new Seo;
        $seo->title         =    $product->name;
        $seo->description   =    $product->short_desc;
        $seo->keywords      =    'Techbasha';
        $seo->seoble_type   =    'Products';
        $seo->seoble_id     =    $product->id;

        $seo->save();
        
        Session::flash('success', 'Product created.');
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       //$post = Post::find($id);

        $product = Product::find($id);
        $seo = Seo::where('seoble_id', $id)
                    ->where('seoble_type', 'Products')
                    ->first();

        $product_categories = ProductCategory::all();
        $product_sub_categories = ProductSubCategory::all();
        $product_second_sub_categories = ProductSecondSubCategory::all();

        return view('admin.product.edit')->with('product', $product)
                                         ->with('product_categories', $product_categories)
                                         ->with('product_sub_categories' , $product_sub_categories)
                                         ->with('product_second_sub_categories' , $product_second_sub_categories)
                                         ->with('seo', $seo);

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
        //mb_convert_encoding($this->render($post), 'UTF-8', 'UTF-8');
        //dd($request->product_category);
        $this->validate($request, [
            'product_pid' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_status' => 'required',
        ]);

        $product = Product::find($id);  
        if($request->hasFile('product_image')){    
            $product_image  = $request->product_image;
            $product_new_name = time().$product_image->getClientOriginalName();
            $product_image->move('admin1/uploads/products', $product_new_name);
            $product->image =  'admin1/uploads/products/' . $product_new_name;
        }

        $product->pid = $request->product_pid;
        //dd($request);
        if($request->product_category != "") {
            $product->product_category_id = $request->product_category;
        }

        if($request->product_sub_category != ""){
            $product->product_sub_category_id = $request->product_sub_category;
        }
        if($request->product_second_sub_category != ""){
        $product->product_second_sub_category_id = $request->product_second_sub_category;
        }

        $product->sku = $request->product_pid;
        $product->name = $request->product_name;
        if($request->product_sale_price == ""){
            $product->sale_price = 0;
        }
        else{
            $product->sale_price = $request->product_sale_price;
        }
        $product->list_price = $request->product_price - $request->product_sale_price;
        $product->price = $request->product_price;
        $product->weight = $request->product_weight;
        $product->long_desc = $request->product_description;  
        $product->short_desc  = $request->product_short_description;
        $product->cart_desc = $request->product_cart_description;
        $product->stock = $request->stock_count;


        if($request->product_status == "on")
            $product->is_live = 1;
        else{
            $product->is_live = 0;
        }
        $product->slug = $request->product_slug;
        //dd($request->product_pid);
        $product->save();


        Session::flash('success', 'Product updated.');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $product = Product::find($id);
        $product->delete();
        Session::flash('success', 'Product deleted.');
        return redirect()->back();
    }

     // SEO

    public function seoedit(Request $request, $id){
        $product = Product::findOrFail($id);
        $seo = Seo::where('seoble_id', $id)
                        ->where('seoble_type', 'Products')
                        ->first();
        //dd($seo);
        //dd(request());

        $seo->title         =    $request->product_meta_title;
        $seo->description   =    $request->product_meta_description;
        $seo->keywords      =    $request->product_meta_keywords;
        $seo->seoble_type   =    'Products';
        $seo->seoble_id     =    $product->id;
        
        $seo->save();

        Session::flash('success', 'Seo Updated.');
       return redirect()->back();
    }
}
