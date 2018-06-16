@extends('layouts.admin-front')

@section('content')
    <!-- eCommerce Products Header -->
                        <div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="{{asset('admin/login')}}"><i class="fa fa-bar-chart"></i> Dashboard</a>
                                </li>
                                <li class="active">
                                    <a href="{{asset('admin/products')}}"><i class="gi gi-shop_window"></i> Products</a>
                                </li>
                               
                                <li>
                                    <a href="{{asset('admin/posts')}}"><i class="gi gi-shopping_bag"></i> Blogs</a>
                                </li>
                                
                                <li>
                                    <a href="{{asset('admin/user')}}"><i class="gi gi-user"></i> Users</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END eCommerce Products Header -->

                        <!-- Quick Stats -->
                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{ route('products.create')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Add New</strong> Product</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{asset('admin/productcategories')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-danger">
                                        <h4 class="widget-content-light"><strong>Product</strong> Categories</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{asset('admin/productsubcategories')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Product</strong> Subcategories</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{asset('admin/productsecondsubcategories')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Product</strong> sub-categories2</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                        </div>
                        <!-- END Quick Stats -->

                        <!-- All Products Block -->
                        <div class="block full">
                            <!-- All Products Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                </div>
                                <h2><strong>All</strong> Products</h2>
                            </div>
                            <!-- END All Products Title -->

                            <!-- All Products Content -->
                            <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 70px;">ID</th>
                                        <th class="text-center">Image</th>
                                        <th>Product Name</th>
                                        <th>Second Level category</th>
                                        <th>First Level category</th>
                                        <th>Category</th>
                                        <th class="text-right hidden-xs">Price</th>
                                        <th class="hidden-xs">Sale Price</th>
                                        <th class="hidden-xs">List Price</th>
                                        <th class="hidden-xs">Status</th>
                                        <th class="hidden-xs text-center">Added</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($products as $product)
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.{{ $product->pid }}</strong></a></td>
                                        <td class="text-center"><img src="../{{$product->image }}" style="height:50px;width:50px; border-radius: 60px;"/></td>
                                       
                                        <td><a href="page_ecom_product_edit.html">{{ $product->name}}</a></td>
                                       
                                       @if($product->product_second_sub_category != null)
                                       <td><a href="page_ecom_product_edit.html">{{ $product->product_second_sub_category->name}}</a></td>
                                       @else
                                       <td><a href="page_ecom_product_edit.html" class="none">---</a></td>
                                       @endif

                                       @if($product->product_sub_category != null)
                                        <td><a href="page_ecom_product_edit.html">{{ $product->product_sub_category->name}}</a></td>
                                       @else
                                        <td><a href="page_ecom_product_edit.html" class="none">---</a></td>
                                       @endif

                                       @if($product->product_category)
                                        <td><a href="page_ecom_product_edit.html">{{ $product->product_category->name}}</a></td>
                                       @else
                                         <td><a href="page_ecom_product_edit.html" class="none">---</a></td>
                                       @endif

                                        <td class="text-right hidden-xs"><strong>{{ $product->price}}</strong></td>
                                        <td class="text-right hidden-xs"><strong>{{ $product->sale_price}}</strong></td>
                                        @if($product->sale_price == "")
                                        <td class="text-right hidden-xs"><strong>{{ $product->price }} </strong></td>
                                        @else
                                           <td class="text-right hidden-xs"><strong>{{ $product->price - $product->sale_price }} </strong></td> 
                                        @endif

                                        <td class="hidden-xs">
                                            @if($product->is_live == 1)
                                                <span class="label label-success">Available ({{ $product->stock}})</span>
                                            @else
                                                <span class="label label-danger">Out of Stock</span>
                                            @endif
                                        </td>
                                        <td class="hidden-xs text-center">{{ $product->created_at->diffForHumans() }}</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{ route('products.edit', ['id' => $product->id ]) }}" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                
                                                <a href="{{route('admin.product.delete', ['id' => $product->id])}}" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                                <div class="col-lg-12">{{ $products->links() }}</div>
                            </table>
                            <!-- END All Products Content -->

                        </div>
                        <!-- END All Products Block -->
@endsection

@section('styles')
<style>
    a.none {
    color: #c33a2d;
    font-size: 30px;
    width: 100%;
    padding: 0px 33%;
}    
</style>
@endsection