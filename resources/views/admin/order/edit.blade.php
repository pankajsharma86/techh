@extends('layouts.admin-front')

@section('content')
    <!-- Forms General Header -->
                       
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Order</li>
                            <li>Order Detail</li>
                        </ul>
                        <!-- END Forms General Header -->

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Content -->
                                   <div class="block-title">
                                        <h2><i class="fa fa-google"></i> <strong>Order</strong> status</h2>
                                    </div>   
                                    <form action="{{ route('admin.order.update', ['id' => $order->id])}}" method="post" class="form-horizontal form-bordered">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="post_title">Order ID</label>
                                            <div class="col-md-9">
                                                <input type="text" id="post_title" name="order_id" class="form-control" value="{{ $order->id}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="post_title">Customer Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="post_title" name="order_id" class="form-control" value="{{ $users->name}}">
                                            </div>
                                        </div>
                                     
                                    <div class="form-group">
                                            <label class="col-md-3 control-label" for="order_status">Order Status</label>
                                            <div class="col-md-8">
                                                <select id="order_status" name="order_status" class="select-chosen" data-placeholder="Choose.." style="width: 250px;">
                                                    <option></option> 
                                                    <option value="...">...</option>
                                                    
                                                        <option value="delivered">delivered</option><option value="not_delivered">Not Delivered</option>

                                                    

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Basic Form Elements Content -->
                                </div>
                                <!-- END Basic Form Elements Block -->
                               
                                <!-- END Basic Form Elements Block -->
                            </div>
                             <div class="col-lg-6">
                                <!-- Meta Data Block -->
                                <div class="block">
                                    <!-- Meta Data Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-google"></i> <strong>Customer</strong> Details</h2>
                                    </div>
                                    <!-- END Meta Data Title -->

                                    <!-- Meta Data Content -->
                                    <form action="" method="post" class="form-horizontal form-bordered">
                                     {{ csrf_field() }}
                                
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-meta-title">Customer ID</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product-meta-title" name="product_meta_title" class="form-control" placeholder="Enter meta title.." value="{{ $order->user_id }}" readonly>
                                                <div class="help-block">55 Characters Max</div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-meta-description">Customer address</label>
                                            <div class="col-md-9">
                                                <textarea id="product-meta-description" name="product_meta_description" class="form-control" rows="6" placeholder="Enter meta description.." readonly> {{$UserSettings->address}} </textarea>
                                                <div class="help-block">115 Characters Max</div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <!-- END Meta Data Content -->
                                </div>
                                <!-- END Meta Data Block -->
                            </div>
                            <div class="col-md-12">
                                <!-- Horizontal Form Block -->
                                <div class="block">
                                    <!-- Horizontal Form Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>Order</strong> details</h2>
                                    </div>
                                    <!-- END Horizontal Form Title -->
                                        <form method="post" action="checkout1.html">

                            
                            
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
                                                
                                                    <img src="../../{{$o->image}}" style="height:80px; width:80px;" alt="Black Blouse Armani">
                                            
                                            </td>
                                            <td>{{$o->name}}</a>
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
                                    <!-- Horizontal Form Content -->
                                    
                                    <!-- END Horizontal Form Content -->
                                </div>
                                <!-- END Horizontal Form Block -->

                                <!-- Normal Form Block -->
                                
                                <!-- END Input Sizes Block -->
                            </div>
                        </div>
@endsection

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
@stop

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>

    <script type="text/javascript">
        
                $(document).ready(function() {
                    $('#post_description').summernote();
                });
        
    </script>
@stop