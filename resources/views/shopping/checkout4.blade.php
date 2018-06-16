@extends('layouts.front')

@section('content')
<br><br><br>

 <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Order review</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="{{ route('cart.checkout')}}">
                         <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_CQ6q9SOZIRzzoddKqV9Qp97N"
                        data-amount="{{ ((number_format(Cart::total()))+((number_format(Cart::total()))*1.15)*0.029+0.30+(number_format(Cart::total()))*1.15-(number_format(Cart::total()))) * 100 }}"
                        data-name="Techbasha"
                        data-description="Credit card payment"
                        data-image="{{ asset('an/images/tech.jpg')}}"
                        data-locale="auto"
                        data-currency="nzd">
                      </script>
                        {{ csrf_field() }}
                            <h4>Checkout - Order review</h4>
                            <ul class="nav nav-pills nav-justified">
                                <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Discount</th>
                                                <th>Total</th>
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
                                                 {{ $pdt->qty }}
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
                                           <tfoot>
                                             <tr>
                                                <th colspan="5">GST</th>
                                                <th>${{ (number_format(Cart::total()))*1.15-(number_format(Cart::total()))}}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="5">Credit card payment</th>
                                                <th>${{ ((number_format(Cart::total()))*1.15)*0.029+0.30}}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                
                                                <th><input class="w3-input w3-border" style="width:130px" id="amount" type="text" value="{{(number_format(Cart::total()))+((number_format(Cart::total()))*1.15)*0.029+0.30+(number_format(Cart::total()))*1.15-(number_format(Cart::total())) }}" readonly name="amount"></th>
                                            </tr>
                                        </tfoot>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{asset('/')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Place an order<i class="fa fa-chevron-right"></i>
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
                                    <tr>
                                        <td>card payment</td>
                                        <th>${{ ((number_format(Cart::total()))*1.15)*0.029+0.30}}</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>${{(number_format(Cart::total()))+((number_format(Cart::total()))*1.15)*0.029+0.30+(number_format(Cart::total()))*1.15-(number_format(Cart::total())) }}</th>
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



@endsection