@extends('layouts.admin-front')

@section('content')
	<!-- eCommerce ProductCategory Edit Header -->
                        
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
                                    <form action="{{ route('productcategories.store') }}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    

                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_category_name">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product_category_name" name="product_category_name" class="form-control" placeholder="Enter product category name..">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_category_image">Image</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="file" id="product_category_image" name="product_category_image" class="form-control">
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
                                    <form action="page_ecom_product_edit.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-meta-title">Meta Title</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product-meta-title" name="product-meta-title" class="form-control" placeholder="Enter meta title..">
                                                <div class="help-block">55 Characters Max</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-meta-keywords">Meta Keywords</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product-meta-keywords" name="product-meta-keywords" class="form-control" placeholder="keyword1, keyword2, keyword3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-meta-description">Meta Description</label>
                                            <div class="col-md-9">
                                                <textarea id="product-meta-description" name="product-meta-description" class="form-control" rows="6" placeholder="Enter meta description.."></textarea>
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