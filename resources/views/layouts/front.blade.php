<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
 <meta charset="UTF-8">

 @yield('seo')
 <meta name="author" content="Tech Basha">
 <meta name="subject" content="Electrical shop | Suppliers">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="robots" content="index,follow"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CMontserrat:300,400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('an/css/main7153.css?ver=4.23')}}">
<link href=" {{asset('tec/files/1/2091/0251/t/2/assets/theme.scss39d2.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('tec/css/main7153.css?ver=4.23')}}">
<link href="{{asset('fi/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('fi/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('fi/css/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('fi/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('fi/css/owl.theme.css')}}" rel="stylesheet">
<link href="{{asset('fi/css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">
<link href="{{asset('fi/css/custom.css')}}" rel="stylesheet">

<!-- slider -->

   <!-- Animate CSS -->
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <!-- Theme CSS -->
        <link href="{{asset('css/slider.css')}}" rel="stylesheet">






<!-- /slider -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="{{asset('fi/js/respond.min.js')}}"></script>
<script src="{{asset('tec/jquery/3.1.0/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('tec/files/1/2091/0251/t/2/assets/vendor39d2.js')}}" defer="defer"></script>
<script src="{{asset('javascripts/currencies.js')}}" defer="defer"></script>
<script src="{{asset('tec/files/1/2091/0251/t/2/assets/jquery.currencies.min39d2.js')}}" defer="defer"></script>
<script src="{{asset('tec/files/1/2091/0251/t/2/assets/theme39d2.js')}}" defer="defer"></script>
<link rel="stylesheet" type="text/css" href="{{asset('tea/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('tea/box.css')}}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Global site tag (gtag.js) - Google Analytics -->
<style>
.mySlides {display:none;}
</style>

<style>
  @media  only screen and (min-width: 590px)
    .section-header {
        margin-bottom: 50px;
        margin-top: 50px;
}
</style>

 <style>
.parallax {
    /* The image used */
    background-image: url("{{asset('images/ww.jpg')}}");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


</head>


<body>
@include('layouts.menu')


<!-- main content -->
<main class="main-content" id="MainContent">
@yield('content')

</main>


<footer>
            
        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer">
            <div class="container">
            <br>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Links</h4>

                        <ul>
                            <li><a href="{{asset('about')}}">About us</a>
                            </li>
                            <li><a href="{{asset('mission')}}">Mission</a>
                            </li>
                            <li><a href="{{asset('maintain')}}">Career</a>
                            </li>
                            <li><a href="{{asset('contact')}}">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="{{asset('login')}}">Login</a>
                            </li>
                            <li><a href="{{asset('login')}}">Register</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Products</h4>
            
                        <ul>
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[7]->slug]) }}">Conduit & accessories</a>
                            </li>
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[6]->slug]) }}">Switch Gears</a>
                            </li>
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[5]->slug]) }}">Cable Management</a>
                            </li>        
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[4]->slug]) }}">Lighting</a>
                            </li>
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[3]->slug]) }}">Fixings</a>
                            </li>
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[2]->slug]) }}">Automation</a>
                            </li>
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[1]->slug]) }}">Tools</a>
                            </li>
                            <li><a href="{{ route('product_maincategory', ['slug' => $product_categories[0]->slug]) }}">Others</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>5D Lorein Place</strong>
                            <br>East tamaki
                            <br>Auckland
                            <br>New Zealand
                    
                            <br>
                            

                        <a style="color: #dcbc80" href="{{asset('contact')}}"><b>Go to contact page</b></a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Our Products on sale !!</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                <button class="btn btn-default" type="button">Subscribe!</button>

            </span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="https://www.facebook.com/Techbasha-1946945542236809/" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/shoptechbasha?lang=en" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/shop.techbasha/" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="https://plus.google.com/u/1/111199319319805743209" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>

                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->
              <br>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 - 2018 Tech Basha.</p>

                </div>
              
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    

  </footer>

   <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="{{asset('fi/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('fi/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fi/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('fi/js/waypoints.min.js')}}"></script>
    <script src="{{asset('fi/js/modernizr.js')}}"></script>
    <script src="{{asset('fi/js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('fi/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('fi/js/front.js')}}"></script>

  </footer>

<div class="div-overlay"></div>
    <!-- Scripts -->
<script src="{{asset('an/js/jquery.min.js')}}"></script>
<script src="{{asset('an/js/search.js')}}" ></script>
<script src="{{asset('an/js/smoothscrolling.js')}}" async></script>

<script src="{{asset('an/js/main68b3.js?ver=1')}}" ></script>
<script src="{{asset('an/js/jquery.hoverIntent.js')}}" ></script>
<!-- slider -->

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


<!-- /slider -->

 <script >
      jQuery(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 300) {
                $("header").addClass("fixedheader");
            } else {
                $("header").removeClass("fixedheader");
            }

        });

 </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a6541e94b401e45400c4518/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
    <script src="{{asset('an/js/home-vendors.js')}}" type="text/javascript"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a63f19ebac55eb8"></script>

</body>

</html>

