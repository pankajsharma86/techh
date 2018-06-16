@extends('layouts.front')

@section('content')

<br><br><br><br><br>
 <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="{{route('shopping.checkout1')}}">
                         {{ csrf_field() }}
                            <h4>Shopping cart</h4>
                            <p class="text-muted">You currently have {{ Cart::content()->count()}} item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Discount</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach(Cart::content() as $pdt)
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="{{ asset($pdt->model->image)}}" alt="{{ $pdt->name }}">
                                                </a>
                                            </td>
                                            <td style="text-align: center;">&nbsp;&nbsp;&nbsp;{{ $pdt->name }}
                                            </td>
                                            <td style="text-align: center;" >
                                                 <div class="quantity">
                                                    <a href="{{ route('cart.decr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" class="quantity-minus quantity-minus">-</a>
                                                         <input title="Qty" class="email input-text qty text" name="qty" type="number" value="{{ $pdt->qty }}" readonly>


                                                    <a href="{{ route('cart.incr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" class="quantity-plus quantity-plus">+</a>
                                                </div>
                                            </td>
                                            <td style="text-align: center;">${{ $pdt->model->price }}</td>
                                            @if($pdt->model->sale_price > 0)
                                                 <td style="text-align: center;">${{ $pdt->model->list_price }}</td>
                                            @endif
                                            @if($pdt->model->sale_price == 0)
                                                 <td style="text-align: center;">-</td>
                                            @endif
                                          
                                            <td>${{ $pdt->total() }}</td>
                                            <td><a href="{{ route('cart.delete', ['id' => $pdt->rowId ])}}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                           
                                             <tr>
                                                <th colspan="5">GST</th>
                                                <th>${{ (Cart::total() * 1.15) - (Cart::total()) }}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                
                                                <th><input class="w3-input w3-border" style="width:130px" id="amount" type="text" value="${{ (Cart::total() * 1.15) - (Cart::total()) }}" readonly name="amount"></th>
                                            </tr>
                                        </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{asset('/')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                               <h3>You may also like these products</h3>
                            </div>
                        </div>
@foreach($sale_products as $sale_product)
                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="../{{ $sale_product->image }}" alt="{{ $sale_product->image }}" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ route('product.single', 
                      [$sale_product->product_category->slug , 
                      $sale_product->product_sub_category->slug, 
                      $sale_product->slug])}}">
                                                <img src="../{{ $sale_product->image }}" alt="{{ $sale_product->image }}" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('product.single', 
                      [$sale_product->product_category->slug , 
                      $sale_product->product_sub_category->slug, 
                      $sale_product->slug])}}" class="invisible">
                                    <img src="../{{ $sale_product->image }}" alt="{{ $sale_product->image }}" class="img-responsive">
                                </a>
                                <div class="text-center">
                                   <p class="price"><h6 style="text-align: center;">Price: ${{ $sale_product->sale_price}}</h6></p>
                                    <a class="btn btn-default"  href="{{route('cart.rapid.add', ['id' => $sale_product->id] )}}"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                   <br><br>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
   @endforeach
                        


                        

                    </div>


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
                                        <th>${{ (Cart::total() * 1.15) - (Cart::total()) }}</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>${{ (Cart::total() * 1.15) - (Cart::total()) }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
<div class="box" style="background-color: black;">
                        <div class="box-header" style="background-color: black;">
                            <img src="../images/techb.png" alt="" class="img-responsive">
                        </div>
                        <img src="../images/paypal.png" alt="" class="img-responsive">
                        
                    </div>

                    

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>


@endsection