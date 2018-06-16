@extends('layouts.front')
@section('seo')

<title>Techbasha | Home | Electrical conduit</title>
 <meta charset="UTF-8">
  <meta name="description" content="Electrical conduit, switchgear, saddles, screws, fixings, fittings, cables, duct snake, fibre inspection probe, inspection tee, junction boxes, electrical tape, coupler, Auckland, New Zealand, wellinngton, christchurch, Hamilton">
  <meta name="keywords" content="electrical conduits, conduit, Auckland, New zealand, flexible conduit, switchgear, saddles, screws, fixings, fittings, cables, duct snake, fibre inspection probe, inspection tee, junction boxes, electrical tape, coupler">
  
@endsection

@section('content')


  <br> <br><br>
 
 
 
            <div class="awesome-carousel"> 
                <div id="awesome_car2" class="carousel slide carousel-fade" data-ride="carousel">
                  <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#awesome_car2" data-slide-to="0" class="active"></li>
                        
                      
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- slider item -->
                        <div class="item active">
                            <img class="bg-img" src="{{asset('images/bg1.jpg')}}" alt="electrical shop">
                            <div class="overlay"></div>
                            <div class="carousel-caption">
                                <div class="cap-img1"> 
                                    <img src="{{asset('images/sli/4.png')}}" alt="electrical suppliers" />
                                </div>
                                <div class="cap-img2"> 
                                    <img src="{{asset('images/sli/1.png')}}" style="width:200px; height:200px; margin-top:50px;" alt="electrical wholesaler New Zealand wide" />
                                </div>
                                <div class="cap-text"> 
                                    <h1 style="color: #ec971f">Electrical products on discount</h1>
                                    <br><br>
                                    <h4 style="color: #ec971f">click here to view our products</h4>
                                    <br>
                                    <a href="{{asset('/products')}}" class="btn btn-warning btn-lg">Products</a>
                                </div>
                                <div class="cap-img3"> 
                                    <img src="{{asset('images/sli/2.png')}}" style="width:200px; height:200px; margin-top:50px;" alt="saddles" />
                                </div>
                                <div class="cap-img4"> 
                                    <img src="{{asset('images/sli/3.png')}}" style="width:200px; height:200px; margin-top:50px;" alt="screws" />
                                </div>
                                <div class="cap-img5"> 
                                    <img src="{{asset('images/sli/5.png')}}" style="width:200px; height:200px; margin-top:50px;" alt="flexi conduit" />
                                </div>
                            </div>
                        </div><!-- End slider item -->
                        <!-- slider item --> 

                        <!-- slider item -->
                      
                    </div>

               <div class="section-header">
        <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <b><h2 style="color:ec971f;">Promotions</h2>
                        </div>
                    </div>
                </div>

      </div>
    </div>  

<div id="CollectionSection" data-section-id="1502288927185" data-section-type="collection-template">
  
    <div class="page-width">
     
     <div class="page-width page-width--flush-small">


    <div class="grid-overflow-wrapper">
 
      <div class="grid grid--uniform" data-aos="">
@foreach($sale_products as $sale_product)

<div class="grid__item grid-product small--one-half medium-up--one-quarter grid-product__has-quick-shop" data-aos="row-of-4">

  <div class="grid-product__content">
    
    
      <div class="grid-product__tag">
        
        Save <span class=money>$ {{ $sale_product->list_price}}</span>
      </div>
    
    
      <div class="quick-product__btn js-modal-open-quick-modal-9873869192 small--hide" data-product-id="9873869192">
        <span class="quick-product__label">Quick view</span>
      </div>
    

    <a href="">
      <div class="grid-product__image-mask">
        <div class="image-wrap" style="height: 0; padding-bottom: 149.926793558%;"><img src="../{{ $sale_product->image }}" alt="{{$sale_product->name}}" class="grid-product__image"></div>

        
          
        
      </div>

      <div class="grid-product__meta">
        <div class="grid-product__title">{{ $sale_product->name}}</div>
        
        <div class="grid-product__price">
          
       
            <div class="text">
                      <p class="price"> Price : NZD <del>${{$sale_product->price}}</del> ${{ $sale_product->sale_price}}</p>
                      <p  class="buttons">

                      <a class="btn btn-primary" 
                      href="{{ route('product.single', 
                      [$sale_product->product_category->slug , 
                      $sale_product->product_sub_category->slug, 
                      $sale_product->slug])}}" 
                      class="btn btn-default">View detail</a>
          
                       
                      <a class="btn btn-default"  href="{{route('cart.rapid.add', ['id' => $sale_product->id] )}}"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </p>
            </div> 
          
        </div>
        
      </div>
    </a>
  </div>
</div>
@endforeach

</div>
      </div>
      </div>
   
    <!-- ***  ***
 _________________________________________________________ -->
     <div class="box text-center">
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We love our customers</a></h3>
                                <p>Don't deliver a product, deliver an experience</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">We offer best prices of products</a></h3>
                                <p>Nothing comes without a price. Our paths are not mapped. They’re made</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>The best way to guarantee a loss is to quit. </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->
</div>
     <!-- *** BLOG HOMEPAGE ***

 _________________________________________________________ -->
               

            <div class="box text-center">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">From our blog</h3>

                        <p class="lead">What's new in the world of products? <a href="{{asset('blog')}}" style="color:#ddba6a;">Check our blog!</a>
                        </p>
                    </div>
                </div>
            </div>

           <div class="box text-left">
            <div class="container">

                <div class="col-md-12">
                   <div id="blog-homepage" class="row1">
                        @foreach($blog_post_thumbnails as $blog_post_thumbnail)
                       <div class="col-sm-6">
                            <div class="post">
                                                                <img src="{{$blog_post_thumbnail->image}}" alt="{{$blog_post_thumbnail->title}}"  style=" width:500px; height:300px;">
                                <h4><a href="{{route('blog.detail', ['slug' => $blog_post_thumbnail->slug ])}}">{{ $blog_post_thumbnail->title }} </a></h4>
                                <p class="author-category">By <a href="#">Techbasha</a> in 
       
                                  
                                
                                </p>
                                <hr>
                                <p class="intro"> {{ $blog_post_thumbnail->shortdescription}} </p>
                                <p class="read-more"><a href="{{route('blog.detail', ['slug' => $blog_post_thumbnail->slug ])}}" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                          
                        </div>
                        @endforeach
                    </div>
                    <!-- /#blog-homepage -->
                </div>
            </div>
            <!-- /.container -->
            </div>
            </div>
            <!-- *** BLOG HOMEPAGE END *** -->



</div>
</div>



@endsection