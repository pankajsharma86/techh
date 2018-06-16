<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use App\Seo;
use Illuminate\Pagination\Paginator;
use Session;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcategories = ProductCategory::orderBy('created_at', 'desc')->paginate(10);
        //dd($productcategories);
        return view('admin.product_category.index')
                    ->with('productcategories', $productcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_category_name' => 'required',
        ]);

        //dd($request);
        $product_category_image = $request->product_category_image;
        $product_category_image_new_name = time() . $product_category_image->getClientOriginalName();
        $product_category_image->move('admin1/uploads/products_categories', $product_category_image_new_name);

        $product_category = new ProductCategory;
        $product_category->name = $request->product_category_name;
        $product_category->image = 'admin1/uploads/products_categories/' . $product_category_image_new_name;
        $product_category->slug = str_slug($request->product_category_name);
        //dd($request);
        
        $product_category->save();

        $seo = new Seo;
        $seo->title         =    $product_category->name;
        $seo->description   =    'Techbasha shortdescription';
        $seo->keywords      =    'Techbasha';
        $seo->seoble_type   =    'Categories';
        $seo->seoble_id     =    $product_category->id;

        $seo->save();
        Session::flash('success', 'Product Category created.');
        return redirect()->route('productcategories.index');
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
       $product_category = ProductCategory::find($id);
       $seo = Seo::where('seoble_id', $id)
                    ->where('seoble_type', 'Categories')
                    ->first();
    //dd($product_category);
       return view('admin.product_category.edit')->with('product_category', $product_category)->with('seo', $seo);
                                        
    }

     public function seoedit(Request $request, $id){
        $ProductCategory = ProductCategory::findOrFail($id);
        $seo = Seo::where('seoble_id', $id)
                        ->where('seoble_type', 'Categories')
                        ->first();
        //dd($seo);
       // dd(request());

        $seo->title         =    $request->product_meta_title;


        $seo->description   =    $request->product_meta_description;
        $seo->keywords      =    $request->product_meta_keywords;
        $seo->seoble_type   =    'Categories';
        $seo->seoble_id     =    $ProductCategory->id;
        
        $seo->save();

        Session::flash('success', 'Seo Updated.');
       return redirect()->back();
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
        $this->validate($request, [
            'product_category_name' => 'required',
        ]);

        if($request->hasFile('product_category_image')){
        $product_category_image = $request->product_category_image;
        $product_category_image_new_name = time() . $product_category_image->getClientOriginalName();
        $product_category_image->move('admin1/uploads/products_categories', $product_category_image_new_name);
        }
        
         $product_category = ProductCategory::find($id);  
        if($request->hasFile('product_category_image')){    
            $product_category->image = 'admin1/uploads/products_categories/' . $product_category_image_new_name; 
        }
        $product_category->name = $request->product_category_name;
        $product_category->slug = $request->product_category_slug;
        $product_category->save();
        Session::flash('success', 'Product Category Updated.');
        return redirect()->route('productcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->delete();
        Session::flash('success', 'Product Category deleted.');
        return redirect()->back();
    }
}
