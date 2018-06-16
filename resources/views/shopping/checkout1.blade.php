@extends('layouts.front')

@section('content')

 <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 79%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 1%;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 88%;
        margin-left: 2%;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 120%;
      }
      @media screen and (max-width: 600px) {
         
         .field {
          width: 100%;
        }
         .slimField {
         width: 100px;
        }
        #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 55%;
      }
        #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 98%;
        margin-left: 2%;
        padding-right: 2px;
      }
       }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
 

<!-- main content -->
<main class="main-content" id="MainContent">
  <br><br><br><br><br>

<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Address</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="{{route('shopping.checkout3')}}">
                          {{ csrf_field() }}
                            <h1>Checkout</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            
                                            <label for="company">Enter your address</label>
                                             <div id="locationField">               <input id="autocomplete" name="address" placeholder="Enter your address"
                                               onFocus="geolocate()" class="form-control" type="text"></input>
                                             </div> 
                                        </div>
                                    </div>

                                    
                                </div>
                                <!-- /.row -->
<div class="row">

    
     <table id="address">
      <tr>
        <td class="label">Address</td>
        <td class="slimField"><input class="field" name="street_number" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" name="route" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <!-- Note: Selection of address components in this example is typical.
             You may need to adjust it for the locations relevant to your app. See
             https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
        -->
        <td class="wideField" colspan="3"><input class="field" name="city" id="locality"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" name="State" disabled="true"></input></td>
        <td class="label">Zip</td>
        <td class="wideField"><input class="field" name="postal_code" id="postal_code"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" name="country" disabled="true"></input></td>
      </tr>
    </table>


</div>



                                <div class="row">
                                    

                                    

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{asset('/cart')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continue to Delivery Method<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">For Shipping Please contact us on 09-215 7278 or email us on accounts@techbasha.com</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                     <tr>
                                        <td>Order subtotal</td>
                                        <th>${{Cart::total()}}</th>
                                    </tr>
                                    
                                    <tr>
                                        <td>Tax</td>
                                        <th>${{ (number_format(Cart::total()))*1.15-(number_format(Cart::total()))}}</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>${{(number_format(Cart::total()))+(number_format(Cart::total()))*1.15-(number_format(Cart::total())) }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>

</main>  
@endsection 
 