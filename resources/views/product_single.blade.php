@extends('layouts.front')

@section('seo')

<title>{{$seo->title}}</title>
 <meta charset="UTF-8">
  <meta name="description" content="{{$seo->description}}">
  <meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')

<!-- main content -->

          <br>
          <br>
          <br>
          <br>
           <br/>
<div id="all">
    <div id="content">
       <div class="container">
       <div class="col-md-12">

                  

                    <div class="box">
                        <h1>{{ $product->product_category->name }}</h1>
                   
                        
                    </div>
             <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">{{ $product->product_category->name }}</a>
                        </li>
                        <li>{{ $product->name}}</li>
                    </ul>

                </div>

        <div class="col-sm-4">
                            <div id="mainImage">
                                <img src="../../../../{{ $product->image }}" alt="{{ $product->image}}" class="img-responsive">
                            </div>

                            <div class="ribbon sale">
                                @if($product->sale_price > 0)
                                <div class="theribbon">SALE</div>
                                @endif
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                          <div class="col-sm-7">
                            <div class="box">
                                <h1 class="text-center">{{ $product->name}}</h1>
                                
                                </p>

                                @if($product->sale_price > 0)
                                            <p class="price"><del>${{ $product->price}}</del> ${{$product->sale_price}}</p>
                                            @endif
                                            @if($product->sale_price <= 0)
                                              <p class="price">Price : ${{ $product->price}}</p>
                                            @endif

                                <p class="text-center buttons">
                                <form action="{{ route('cart.rapid.add', ['id' => $product->id] ) }}" method="get">
                                  {{ csrf_field() }}
                                  <div class="row">
                                                <div class="quantity">
                                                       <input title="Qty" class="email input-text qty text-center" name="qty" type="number" min="1" value="1" placeholder="Quantity" style="max-width: 10%;">

                                                    <input type="hidden" name="pdt_id" value="{{ $product->id }}">

                                                    <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                </div>
                                      
                                  <p></p>
                                  </div>
                                 
                                </form>
                                <p></p>                               
                                    <a href="{{ route('wishlists.add', ['id' => $product->id ])}}" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>


                            </div>
                            </div>
<div class="col-sm-11">
                             <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <p>{{ $product->name}}</p>
                          
                
                            <ul>
                                <li>{{ $product->short_desc}}</li>
                            </ul>

                            <blockquote>
                                <p> {!! $product->long_desc !!} </p>
                            </blockquote>

                            <hr>
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
<br>
@endsection


