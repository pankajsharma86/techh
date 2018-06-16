@extends('layouts.admin-front')

@section('content')
    <!-- eCommerce Product Edit Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="gi gi-notes_2"></i>Add New Post<br>
                                </h1>

                            </div>


                        </div>
                        
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Post</li>
                            <li><a href="">Add New</a></li>
                        </ul>
                        <!-- END eCommerce Product Edit Header -->

                        <!-- Product Edit Content -->
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
                                    <form action="{{ route('posts.store')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="post_title">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" id="post_title" name="post_title" class="form-control" placeholder="Add title">
                                            </div>
                                        </div>
                                       
                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="post_image">Choose image</label>
                                            <div class="col-md-9">
                                                <input type="file" id="post_image" name="post_image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_description">Description</label>
                                            <div class="col-md-9">
                                                <textarea id="post_description" name="post_description" class="ckeditor"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="post_shortdescription">Short Description</label>
                                            <div class="col-md-9">
                                                <textarea id="post_shortdescription" name="post_shortdescription" rows="9" class="form-control"></textarea>
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
                                    <form action="" method="post" class="form-horizontal form-bordered" >
                                    {{ csrf_field() }}
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
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit">Save</button>
                                                <button type="reset" class="btn btn-sm btn-warning"> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Meta Data Content -->
                                </div>
                                <!-- END Meta Data Block -->
                            </div>
                        </div>
                        <!-- END Product Edit Content -->
@endsection

@section('scripts')
    <script src="{{ asset('js/helpers/ckeditor/ckeditor.js')}}"></script>
    <script>
        var product_status = document.getElementById('product-status');
        var stock_count = document.getElementById('stock-count');

        stock_count.disabled = !product_status.checked;
        product_status.onchange = function() {
            stock_count.disabled = !this.checked;
        };
    </script>
@endsection