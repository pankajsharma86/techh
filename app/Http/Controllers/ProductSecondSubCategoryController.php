<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductSecondSubCategory;
use App\ProductCategory;
use App\ProductSubCategory;
use Session;
use App\Seo;

class ProductSecondSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $productsecondsubcategories = ProductSecondSubCategory::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.product_second_sub_category.index')
                    ->with('productsecondsubcategories', $productsecondsubcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_sub_categories = ProductSubCategory::all();
       return view('admin.product_second_sub_category.create')
                ->with('product_sub_categories', $product_sub_categories);
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
            'product_sub_category' => 'required',
            'product_second_sub_category_name' => 'required'
        ]);


        $product_second_sub_category_image = $request->product_second_sub_category_image;
        $product_second_sub_category_image_new_name = time() . $product_second_sub_category_image->getClientOriginalName();
        $product_second_sub_category_image->move('admin1/uploads/products_second_sub_categories', $product_second_sub_category_image_new_name);

        $product_second_sub_category = new ProductSecondSubCategory;
        $product_second_sub_category->name = $request->product_second_sub_category_name;
        $product_second_sub_category->image = 'admin1/uploads/products_second_sub_categories/' . $product_second_sub_category_image_new_name;

        $product_second_sub_category->product_sub_category_id = $request->product_sub_category;
           $product_second_sub_category->slug = str_slug($request->product_second_sub_category_name);
        $product_second_sub_category->save();

           $seo = new Seo;
        $seo->title         =    $product_second_sub_category->name;
        $seo->description   =    'Techbasha shortdescription';
        $seo->keywords      =    'Techbasha';
        $seo->seoble_type   =    'Secondsubcategories';
        $seo->seoble_id     =    $product_second_sub_category->id;

        $seo->save();
        
        Session::flash('success', 'Second Level Category created.');
        return redirect()->route('productsecondsubcategories.index');

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
        //dd($id);
        $product_second_sub_category = ProductSecondSubCategory::find($id);
        $product_sub_categories = ProductSubCategory::all();
        $seo = Seo::where('seoble_id', $id)
                    ->where('seoble_type', 'Secondsubcategories')
                    ->first();
        //dd($seo);
        return view('admin.product_second_sub_category.edit')
                    ->with('product_second_sub_category', $product_second_sub_category)
                    ->with('product_sub_categories', $product_sub_categories)  ->with('seo', $seo);
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
            'product_second_sub_category' => 'required',
            'product_sub_category' => 'required'
        ]);

        if($request->hasFile('product_second_sub_category_image')){
            $product_second_sub_category_image = $request->product_second_sub_category_image;
            $product_second_sub_category_image_new_name = time() . $product_second_sub_category_image->getClientOriginalName();
            $product_second_sub_category_image->move('admin1/uploads/products_second_sub_categories', $product_second_sub_category_image_new_name);
        }
        
        
         $product_second_sub_category = ProductSecondSubCategory::find($id);  
        if($request->hasFile('product_second_sub_category_image')){    
            $product_second_sub_category->image = 'admin1/uploads/products_second_sub_categories/' . $product_second_sub_category_image_new_name; 
        }
        $product_second_sub_category->name = $request->product_second_sub_category;
        $product_second_sub_category->product_sub_category_id = $request->product_sub_category;
          $product_second_sub_category->slug = $request->product_second_sub_category_slug;
        $product_second_sub_category->save();
        Session::flash('success', 'Second Level Category Updated.');
        return redirect()->route('productsecondsubcategories.index');
    }

     public function seoedit(Request $request, $id){
        $ProductSecondSubCategory = ProductSubCategory::findOrFail($id);
        $seo = Seo::where('seoble_id', $id)
                        ->where('seoble_type', 'Secondsubcategories')
                        ->first();
        //dd($seo);
       // dd(request());

                        

        $seo->title         =    $request->product_meta_title;


        $seo->description   =    $request->product_meta_description;
        $seo->keywords      =    $request->product_meta_keywords;
        $seo->seoble_type   =    'Secondsubcategories';
        $seo->seoble_id     =    $ProductSecondSubCategory->id;
        
        $seo->save();

        Session::flash('success', 'Seo Updated.');
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function delete($id){
        $product_second_sub_category = ProductSecondSubCategory::find($id);
        $product_second_sub_category->delete();
        Session::flash('success', 'Second Level Category deleted.');
        return redirect()->back();
    }
}
