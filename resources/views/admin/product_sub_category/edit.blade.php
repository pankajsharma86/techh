@extends('layouts.admin-front')

@section('content')
	<!-- Product Category  -->
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- General Data Block -->
                                <div class="block">
                                    <!-- General Data Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-pencil"></i> <strong>General</strong> Data</h2>
                                    </div>
                                    <!-- END General Data Title -->

                                    <!-- General Data Content -->
                                    <form action="{{ route('productsubcategories.update', ['id' => $product_sub_category->id ]) }}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">  
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_category">Category</label>
                                            <div class="col-md-8">
                                                <select id="product_category" name="product_category" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">
                                                    <option></option> 
                                                        @foreach($product_categories as $product_category)
                                                        <option value="{{$product_category->id}}"
                                                        	 @if($product_sub_category->product_category_id == $product_category->id)
                                                                selected
                                                            @endif
                                                        >{{$product_category->name}}</option>
                                                        @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        
                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_sub_category_name">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product_sub_category_name" name="product_sub_category_name" class="form-control" value="{{ $product_sub_category->name }}">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_slug">Slug</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product_sub_category_slug" name="product_sub_category_slug" class="form-control" placeholder="Enter product slug.." value="{{ $product_sub_category->slug }}">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_sub_category_image">Image</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="file" id="product_sub_category_image" name="product_sub_category_image" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                       <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END General Data Content -->
                                </div>
                                <!-- END General Data Block -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Meta Data Block -->
                                <div class="block">
                                    <!-- Meta Data Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-google"></i> <strong>Meta</strong> Data</h2>
                                    </div>
                                    <!-- END Meta Data Title -->

                                    <!-- Meta Data Content -->
                                    <form action="{{route('productsubcategoryseo.edit', ['id' => $product_sub_category->id ] ) }}" method="post" class="form-horizontal form-bordered">
                                     {{ csrf_field() }}

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-meta-title">Meta Title</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product-meta-title" name="product_meta_title" class="form-control" placeholder="Enter meta title.." value="{{ $seo->title }}">
                                                <div class="help-block">55 Characters Max</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-meta-keywords">Meta Keywords</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product-meta-keywords" name="product_meta_keywords" class="form-control" placeholder="keyword1, keyword2, keyword3" value="{{ $seo->keywords }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_meta_description">Meta Description</label>
                                            <div class="col-md-9">
                                                <textarea id="product_meta_description" name="product_meta_description" class="form-control" rows="6" placeholder="Enter meta description..">{{ $seo->description }}</textarea>
                                                <div class="help-block">115 Characters Max</div>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Meta Data Content -->
                                </div>
                                <!-- END Meta Data Block -->
                            </div>
                        </div>
                        <!-- END Product Category -->
@endsection