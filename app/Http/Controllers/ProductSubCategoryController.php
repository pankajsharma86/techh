<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\ProductSubCategory;
use Session;
use App\seo;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsubcategories = ProductSubCategory::orderBy('created_at', 'desc')->paginate(10);
        
        return view('admin.product_sub_category.index')
                    ->with('productsubcategories', $productsubcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::all();
        return view('admin.product_sub_category.create')->with('product_categories', $product_categories);
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
            'product_category' => 'required',
            'product_sub_category_name' => 'required',
        ]);
        
        
        $product_sub_category_image = $request->product_sub_category_image;
        $product_sub_category_image_new_name = time() . $product_sub_category_image->getClientOriginalName();
        $product_sub_category_image->move('admin1/uploads/products_sub_categories', $product_sub_category_image_new_name);

        $product_sub_category = new ProductSubCategory;
        $product_sub_category->name = $request->product_sub_category_name;
        $product_sub_category->image = 'admin1/uploads/products_sub_categories/' . $product_sub_category_image_new_name;
        $product_sub_category->product_category_id = $request->product_category;
         $product_sub_category->slug = str_slug($request->product_sub_category_name);
        $product_sub_category->save();

         $seo = new Seo;
        $seo->title         =    $product_sub_category->name;
        $seo->description   =    'Techbasha shortdescription';
        $seo->keywords      =    'Techbasha';
        $seo->seoble_type   =    'Subcategories';
        $seo->seoble_id     =    $product_sub_category->id;

        $seo->save();
        
        Session::flash('success', 'First Level Category created.');
        return redirect()->route('productsubcategories.index');
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
        $product_sub_category = ProductSubCategory::find($id);
        $product_categories = ProductCategory::all();
        
        $seo = Seo::where('seoble_id', $id)
                    ->where('seoble_type', 'Subcategories')
                    ->first();
        return view('admin.product_sub_category.edit')
                ->with('product_sub_category', $product_sub_category)
                ->with('product_categories', $product_categories)
                ->with('seo', $seo);
    }

     public function seoedit(Request $request, $id){
        $ProductSubCategory = ProductSubCategory::findOrFail($id);
        $seo = Seo::where('seoble_id', $id)
                        ->where('seoble_type', 'Subcategories')
                        ->first();
       
        $seo->title         =    $request->product_meta_title;


        $seo->description   =    $request->product_meta_description;
        $seo->keywords      =    $request->product_meta_keywords;
        $seo->seoble_type   =    'Subcategories';
        $seo->seoble_id     =    $ProductSubCategory->id;
        
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
        //dd($request);
        $this->validate($request, [
            'product_sub_category_name' => 'required',
            'product_category' => 'required'
        ]);

        if($request->hasFile('product_sub_category_image')){

        $product_sub_category_image = $request->product_sub_category_image;
        $product_sub_category_image_new_name = time() . $product_sub_category_image->getClientOriginalName();
        $product_sub_category_image->move('admin1/uploads/products_sub_categories', $product_sub_category_image_new_name);
        }
        
        
         $product_sub_category = ProductSubCategory::find($id);  
        if($request->hasFile('product_sub_category_image')){    
            $product_sub_category->image = 'admin1/uploads/products_sub_categories/' . $product_sub_category_image_new_name; 
        }
        $product_sub_category->name = $request->product_sub_category_name;
        $product_sub_category->product_category_id = $request->product_category;
         $product_sub_category->slug = $request->product_sub_category_slug;
        $product_sub_category->save();
        Session::flash('success', 'First Level Category Updated.');
        return redirect()->route('productsubcategories.index');
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

    public function delete($id){
        $product_sub_category = ProductSubCategory::find($id);
        $product_sub_category->delete();
        Session::flash('success', 'First Level Category deleted.');
        return redirect()->back();
    }
}
