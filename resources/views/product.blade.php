@extends('layouts.front')

<title>Tech basha</title>
<meta name="description" content=" ">
<meta name="keywords" content="">
@section('content')

<!-- main content -->
<main class="main-content" id="MainContent">
<br>
<br>
<br>
<br/>
<br/>

<div id="all">

        <div id="content">
            <div class="container">

                <div class="">

                    <div class="box">
                        <h1>Products</h1>
                    </div>

                    <div class="box">
                
                  
                       <ul class="breadcrumb">
                        
                         <li>Home</li>
                         <li>Products</li>
                         
                        
                       </ul>
                

                    
                    </div>

                    <br><br><br>

                    <div class="row products">


      <div class="page-width page-width--flush-small">
    <div class="grid-overflow-wrapper">
      <div class="grid grid--uniform" data-aos="overflow__animation">
      
         @foreach($product as $products)
        <div class="grid__item grid-product small--one-half medium-up--one-quarter grid-product__has-quick-shop" data-aos="row-of-4">
          <div class="grid-product__content">
              @if($products->sale_price > 0)
            <div class="grid-product__tag">
                Save <span class=money>${{ $products->list_price }}</span>
            </div>
          @endif
          @if($products->sale_price < 0)
            <div class="quick-product__btn js-modal-open-quick-modal-9873869192 small--hide">
                 <span class=quick-product__label>Quick View</span>
            </div>
          @endif
            
            
            <div class="quick-product__btn js-modal-open-quick-modal-9873869192 small--hide" data-product-id="9873869192">
                <span class="quick-product__label">Quick view</span>
            </div>
            

            <a href="" class="grid-product__link ">
              <div class="grid-product__image-mask">
                <div class="image-wrap" style="height: 0; padding-bottom: 149.926793558%;"><img src="../{{$products->image}}" alt="{{ $products->name }}" class="grid-product__image"></div>
                </div>

                <div class="grid-product__meta">
                    <div class="grid-product__title">{{ $products->name }}</div>
                            <div class="text">
                              @if($products->sale_price > 0)
                                            <p class="price"><del>${{ $products->price}}</del> ${{$products->sale_price}}</p>
                                            @endif
                                            @if($products->sale_price <= 0)
                                              <p class="price">Price : ${{ $products->price}}</p>
                                            @endif
                                        @if($products->is_live > 0)      
                              <p  class="buttons">
                             
                                <a href="{{ route('product.single', [$products->product_category->slug, $products->product_sub_category->slug, $products->slug])}}" class="btn btn-default">View detail</a>
                                <a href="{{route('cart.rapid.add', ['id' => $products->id] )}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                              </p>
                              @else
                                  
                              <p  class="buttons">
                             
                                <a href="{{ route('product.single', [$products->product_category->slug, $products->product_sub_category->slug, $products->slug])}}" class="btn btn-default">View detail</a>
                                <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Out of stock</a>
                              </p>
                              @endif
                            </div> 
                </div>
            </a>
          </div>
        </div>
    @endforeach
    </div>
  {{ $product->links()}}
  </div>
        </div>
                            <!-- /.product -->
    </div>
</div>
<!-- /.products -->




        </div>
        <!-- /.col-md-9 -->

    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

</main>


@endsection