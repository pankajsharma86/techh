@extends('layouts.front')
@section('seo')

<title>{{$seo->title}}</title>
 <meta charset="UTF-8">
  <meta name="description" content="{{$seo->description}}">
  <meta name="keywords" content="{{$seo->keywords}}">

@endsection
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
                        <h1>{{ $product_second_sub_category->product_sub_category->product_category->name }}</h1>
                    </div>

                    <div class="box">
                
                  
                       <ul class="breadcrumb">
                        
                         <li>Home</li>
                         <li>{{ $product_second_sub_category->product_sub_category->name }}</li>
                         <li>{{ $product_second_sub_category->name }}</li>
                         <li> Showing <strong>{{ $product_second_sub_category->product->count() }}</strong> of <strong>{{ $product_second_sub_category->product->count() }}</strong> products</li>
                       </ul>
                

                    
                    </div>

                    <br><br><br>

                    <div class="row products">


      <div class="page-width page-width--flush-small">
    <div class="grid-overflow-wrapper">
      <div class="grid grid--uniform" data-aos="overflow__animation">
      
      @foreach($product_second_sub_category->product as $product)
        <div class="grid__item grid-product small--one-half medium-up--one-quarter grid-product__has-quick-shop" data-aos="row-of-4">
          <div class="grid-product__content">
            @if($product->sale_price > 0)
            <div class="grid-product__tag">
                Save <span class=money>${{ $product->list_price }}</span>
            </div>
          @endif
          @if($product->sale_price <= 0)
            <div class="quick-product__btn js-modal-open-quick-modal-9873869192 small--hide">
                 <span class=quick-product__label>Quick View</span>
            </div>
          @endif
            
            
            <div class="quick-product__btn js-modal-open-quick-modal-9873869192 small--hide" data-product-id="9873869192">
                <span class="quick-product__label">Quick view</span>
            </div>
            

            <a href="" class="grid-product__link ">
              <div class="grid-product__image-mask">
                <div class="image-wrap" style="height: 0; padding-bottom: 149.926793558%;"><img src="../../../../{{$product->image}}" alt="{{ $product->name }}" class="grid-product__image"></div>
                </div>

                <div class="grid-product__meta">
                    <div class="grid-product__title">{{ $product->name }}</div>
                            <div class="text">
                             @if($product->sale_price > 0)
                                            <p class="price"><del>${{ $product->price}}</del> ${{$product->sale_price}}</p>
                                            @endif
                                            @if($product->sale_price <= 0)
                                              <p class="price">Price : ${{ $product->price}}</p>
                                            @endif
                              <p  class="buttons">
                                <a href="{{ route('product.single',[$product->product_category->slug,$product->product_sub_category->slug, $product->slug])}}" class="btn btn-default">View detail</a>
                                <a href="{{route('cart.rapid.add', ['id' => $product->id] )}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                              </p>
                            </div> 
                </div>
            </a>
          </div>
        </div>
    @endforeach
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