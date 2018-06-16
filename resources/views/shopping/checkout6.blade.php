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
                        <li><a href="#">Home</a>
                        </li>
                        <li>Order details</li>
                    </ul>
                </div>

                <div class="col-md-12" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.html">

                            <h1>Order details</h1>
                            
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
                                    @foreach($order->orderItems as $o)
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="../../{{$o->image}}" alt="Black Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="#">{{$o->name}}</a>
                                            </td>
                                            <td>
                                                {{$o->pivot->qty}}
                                            </td>
                                            <td>{{$o->price}}</td>
                                            <td>{{$o->list_price}}</td>
                                            <td>${{$o->pivot->total}}</td>
                                            <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">${{$order->total * 1.15 - $order->total}}</th>
                                        </tr>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">${{$order->total*1.15}}</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                             </form>
                       

                    </div>
                    <!-- /.box -->


                  

</main>

  
 



@endsection