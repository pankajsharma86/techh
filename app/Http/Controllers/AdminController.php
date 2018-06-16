<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("hgj");

          $orders = Order::orderBy('created_at', 'desc')->paginate(10);
      //  return view('admin.dashboard');
        return view('admin.dashboard', ['orders' => $orders]);
    }
}
