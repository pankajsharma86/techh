@extends('layouts.front')

@section('content')


<!-- main content -->
<main class="main-content" id="MainContent">
  <br><br><br><br><br>
<br/>
   
  <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>My orders</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="{{asset('/home')}}"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li >
                                    <a href="{{ route('user.wishlist')}}"><i class="fa fa-heart"></i> My wishlist</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>My orders</h1>

                        <p class="lead">Your orders on one place.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>

                                      <!--   <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                
                                @foreach($orders as $order)
                                    <tr>
                                        <th># {{ $order->id }}</th>
                                        <td>{{ $order->created_at->diffForHumans() }}</td>
                                        <td>$ {{($order->total)+ (($order->total)*1.15-($order->total)) }}</td>
                                        <td>{{$order->payment}}</td>
                                        @if($order->delivered == 0)
                                            <td> Not delivered </td>
                                        @else
                                            <td>Delivered</td>
                                        @endif
                                        
                                       <td><a href="{{ route('shopping.checkout6', ['order_id' => $order->id])}}" class="btn btn-primary btn-sm">View</a>
                                        </td> 
                                    </tr>
                                    
                                @endforeach

                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<br/>

</main>

  
 


@endsection