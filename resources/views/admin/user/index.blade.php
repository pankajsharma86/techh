@extends('layouts.admin-front')

@section('content')
					<!-- Post Header -->
                   <div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="{{asset('admin/login')}}"><i class="fa fa-bar-chart"></i> Dashboard</a>
                                </li>
                                <li >
                                    <a href="{{asset('admin/products')}}"><i class="gi gi-shop_window"></i> Products</a>
                                </li>
                               
                                <li >
                                    <a href="{{asset('admin/posts')}}"><i class="gi gi-shopping_bag"></i> Blogs</a>
                                </li>
                                
                                <li class="active">
                                    <a href="{{asset('admin/user')}}"><i class="gi gi-user"></i> Users</a>
                                </li>
                            </ul>
                        </div>
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
                                            <th class="text-center">name</th>
                                            <th class="text-center">email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                    	@foreach($user as $user)
                                        	<tr>
	                                            <td class="text-center">{{ $user->id}}</td>
	                                            <td class="text-center">{{ $user->name}}</td>
                                                 <td class="text-center">{{ $user->email}}</td>
	                                            
	                                            
	                                                    
	                                                
	                                            </td>
	                                        </tr>
	                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Post Content -->
@endsection