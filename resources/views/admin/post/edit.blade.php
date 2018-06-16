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
                                    
                                    <!-- END General Data Title -->

                                    <!-- General Data Content -->
                                    <form action="{{ route('posts.update', ['id' => $post->id])}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="post_title">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" id="post_title" name="post_title" class="form-control" value="{{ $post->title}}">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_slug">Slug</label>
                                            <div class="col-md-9">
                                                <input type="text" id="post_slug" name="post_slug" class="form-control" placeholder="Enter product slug.." value="{{ $slug }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="post_shortdescription">Short Description</label>
                                            <div class="col-md-9">
                                                <textarea id="post_shortdescription" name="post_shortdescription" rows="9" class="form-control">{{ $post->shortdescription}}</textarea>
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

                                            <textarea class="form-control" id="summary-ckeditor">{!! $post->description !!}</textarea>

                                        <!--        <textarea id="summernote" name="post_description" >{!! $post->description !!}</textarea> -->
                                            </div>
                                        </div>
                                       
                                       
                                      
                                       <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
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
                                    <form action="{{route('postseo.edit', ['id' => $post->id ]) }}" method="post" class="form-horizontal form-bordered">
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
                                            <label class="col-md-3 control-label" for="product-meta-description">Meta Description</label>
                                            <div class="col-md-9">
                                                <textarea id="product-meta-description" name="product_meta_description" class="form-control" rows="6" placeholder="Enter meta description..">{{ $seo->description }}</textarea>
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

    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection