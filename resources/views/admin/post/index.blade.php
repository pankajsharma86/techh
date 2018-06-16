@extends('layouts.admin-front')
@section('seo')
    

    <meta name="description" content="Techbasha is one of the largest domestic manufacturers of electrical construction materials. Buy Switches, Conduits, saddles and Cables at best prices. ">
@stop
@section('content')

<div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="{{asset('admin/login')}}"><i class="fa fa-bar-chart"></i> Dashboard</a>
                                </li>
                                <li >
                                    <a href="{{asset('admin/products')}}"><i class="gi gi-shop_window"></i> Products</a>
                                </li>
                               
                                <li class="active">
                                    <a href="{{asset('admin/posts')}}"><i class="gi gi-shopping_bag"></i> Blogs</a>
                                </li>
                                
                                <li>
                                    <a href="{{asset('admin/user')}}"><i class="gi gi-user"></i> Users</a>
                                </li>
                            </ul>
                        </div>
					<!-- Post Header -->
                        <div class="row text-center">
       <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{ route('posts.create')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Create</strong>Blogs </h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                            </div></div>
                        <!-- END Post Header -->

                        <!-- Post Data -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Datatables</strong> integration</h2>
                            </div>
                            

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><i class="gi gi-user"></i></th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                    	@foreach($posts as $post)
                                        	<tr>
	                                            <td class="text-center">{{ $post->id}}</td>
	                                            <td class="text-center">{{ $post->title}}</td>
                                                <td class="text-center"><img src="../{{$post->image}}" alt="{{$post->image}}" class="img-circle" style=" width:50px; height:50px;"></td>
	                                            
	                                            <td class="text-center">
	                                                <div class="btn-group">
	                                                    <a href="{{route('posts.edit', ['id' => $post->id ])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>

                                                         <a href="{{route('posts.delete', ['id' => $post->id ])}}" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
	                                                    
	                                                </div>
	                                            </td>
	                                        </tr>
	                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Post Content -->
@endsection