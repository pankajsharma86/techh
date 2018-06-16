<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Product;
use App\ProductCategory;

class AdminloginController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('guest:admin',['except'=>['logout','adminlogout']]);
    }
    public function showloginform(){
        $product = Product::all();
         $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();

    	return view('auth.admin-login')->with('product_categories' , $product_categories);
    }

    public function adminlogout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function login(Request $request){
    	$this->validate($request,[
    		'email' => 'required|email',
            'password'=>'required|min:6',
        ]);
     
      // attempt login

         
    	if (Auth::guard('admin')->attempt([ 'email' => $request->email, 'password' => $request->password], $request->remember)) {
    		// if successfull
            
    		return redirect()->intended(route('admin.dashboard'));

    	}
        else{
    	// if unsuccessful
            dd('ssss');
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    	}
    }
}
