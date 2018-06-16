<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Countries;
use App\Product;
use App\ProductCategory;
use App\CustomerUser;
use Auth;
use Session;
use App\User;
use App\UserSetting;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($token = null)
    {

        //dd(Auth::user()->email);
        $user_id = Auth::user()->id;
        $user = User::Find($user_id)->user_settings;

        $product = Product::all();
        $product_categories = ProductCategory::orderBy('created_at', 'desc')->take(8)->get();
        //$countries = Countries::getList('en', 'json');
        return view('user/customer-account')->with('user', $user)
                                            ->with('product', $product)
                                            ->with('product_categories', $product_categories)
                                            ->with(['token' => $token, 'email' => Auth::user()->email]);
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
    public function store(Request $request)
    {
        
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
        $this->validate(request(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $user = UserSetting::find($id);
        $user->address = request()->address;
        $user->country = request()->country;
        $user->user->email = request()->email;
        $user->phone = request()->phone;
        $user->user->name = request()->name;
        
        $user->save();

        $user->user->save();
        Session::flash('success', 'Account updated.');
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
        //
    }
}
