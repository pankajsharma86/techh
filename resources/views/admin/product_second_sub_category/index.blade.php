@extends('layouts.admin-front')

@section('content')
    
                        <!-- Quick Stats -->
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
    <!-- Quick Stats -->
    <div class="row text-center">
       <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{ asset('admin/products')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Products</strong> </h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
        
        
        <div class="col-sm-6 col-lg-3">
                                <a href="{{asset('admin/productsecondsubcategories')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-danger">
                                        <h4 class="widget-content-light"><strong>Product</strong> sub-categories</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>


                             <div class="col-sm-6 col-lg-3">
                                <a href="{{ asset('admin/productsubcategories')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Product</strong> Subcategories</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="{{route('productsecondsubcategories.create')}}" class="widget widget-hover-effect2">
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
                                <h2><strong>All</strong> Second Level Categories</h2>
                            </div>
                            <!-- END All Products Title -->

                            <!-- All Products Content -->
                            <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">Image</th>
                                        <th>Second Level Category</th>
                                        <th>First Level Category</th>
                                        <th>Category</th>
                                        <th>Created</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($productsecondsubcategories as $productsecondsubcategory)
                                    <tr>
                                        <td class="text-center"><img src="../{{ $productsecondsubcategory->image }}" style="height:50px;width:50px; border-radius: 60px;"/></td>

                                        <td><a href="page_ecom_product_edit.html">{{ $productsecondsubcategory->name}}</a></td>

                                        <td><a href="">{{    $productsecondsubcategory->product_sub_category->name }}</a></td>
                                        <td><a href="">{{    $productsecondsubcategory->product_sub_category->product_category->name }}</a></td>
                                        
                                       <td class="hidden-xs text-center">{{ $productsecondsubcategory->created_at->diffForHumans() }}</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{ route('productsecondsubcategories.edit', ['id' => $productsecondsubcategory->id ]) }}" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                
                                                <a href="{{ route('admin.productsecondsubcategory.delete', ['id' => $productsecondsubcategory->id ])}}" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                                <div class="col-lg-12">{{ $productsecondsubcategories->links() }}</div>
                            </table>
                            <!-- END All Products Content -->

                        </div>
                        <!-- END All Products Block -->
@endsection