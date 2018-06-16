<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
 <meta charset="UTF-8">

 @yield('seo')
 <meta name="author" content="Tech Basha">
 <meta name="subject" content="Electrical shop | Suppliers">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="robots" content="index,follow"/>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">


<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('menus/css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('menus/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('menus/css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('menus/css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('menus/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('menus/css/style.css')}}" />




<link href=" {{asset('tec/files/1/2091/0251/t/2/assets/theme.scss39d2.css')}}" rel="stylesheet" type="text/css" media="all" />

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
<script src="{{asset('menus/js/jquery.min.js')}}"></script>
    <script src="{{asset('menus/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('menus/js/slick.min.js')}}"></script>
    <script src="{{asset('menus/js/nouislider.min.js')}}"></script>
    <script src="{{asset('menus/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('menus/js/main.js')}}"></script>


 <!-- checkout1 -->

 <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNPupmXCjb70A9bSxazjHTOpS_tmU3vFQ&libraries=places&callback=initAutocomplete"
        async defer></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNPupmXCjb70A9bSxazjHTOpS_tmU3vFQ&libraries=places">

<!-- end checkout1 -->

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

