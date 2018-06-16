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
                        <li><a href="index.html">Home</a>
                        </li>
                        <li>My wishlist</li>
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
                                <li >
                                    <a href="{{asset('/home')}}"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li class="active">
                                    <a href="{{asset('user/wishlists')}}"><i class="fa fa-heart"></i> My wishlist</a>
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

                <div class="col-md-9" id="wishlist">

                   

                    <div class="row products">
                    @foreach($wishlists as $wishlist)
                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                
                                <a href="detail.html" class="">
                                    <img src="../{{ $wishlist->product->image }}" alt="{{ $wishlist->product->image }}" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">{{ $wishlist->product->name }}</a></h3>
                                    <p class="price">{{ $wishlist->product->price }}</p>
                                    <p class="buttons">
                                        <a href="{{ route('product.single', ['id' => $wishlist->product->slug ])}}" class="btn btn-default">View detail</a>
                                        <a href="{{route('cart.rapid.add', ['id' => $wishlist->product->slug] )}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                    @endforeach


                    </div>
                    <!-- /.products -->

                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->  
 
<br/>

</main>
  
 


@endsection