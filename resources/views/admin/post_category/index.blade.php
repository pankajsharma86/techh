@extends('layouts.app')

@section('content')
					<!-- Post Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    All blog categories<br><small>Here is the list of all blog categories</small>
                                </h1><br>
                                
                                <form action="{{ route('postcategories.store')}}" method="post" class="form-inline">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="sr-only" for="post_category"></label>
                                    <input type="text" id="post_category" name="post_category" class="form-control" placeholder="Enter Category">
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Add new</button>
                                </div>
                            </form>

                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Post Category</li>
                            <li><a href="">All Post Categories</a></li>
                        </ul>
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
                                            <th class="text-center">Categories</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($post_categories->count() > 0 && Auth::user()->admin == 1)
                                    	@foreach($post_categories as $post_category)
                                        <tr>
	                                        <td class="text-center">{{$post_category->name}}</a></td>
	                                            
	                                            <td class="text-center">
	                                                <div class="btn-group">
	                                                    <a href="{{ route('postcategories.edit', ['id' => $post_category->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>

                                                        <a href="{{route('admin.post_category.delete', ['id' => $post_category->id])}}" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
	                                                    
	                                                </div>
	                                            </td>
	                                    </tr>
	                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Post Content -->
@endsection