@extends('layouts.admin-front')

@section('content')
	<!-- eCommerce Product Edit Header -->
                        <div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="page_ecom_dashboard.html"><i class="fa fa-bar-chart"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="page_ecom_orders.html"><i class="gi gi-shop_window"></i> Orders</a>
                                </li>
                                <li>
                                    <a href="page_ecom_order_view.html"><i class="gi gi-shopping_cart"></i> Order View</a>
                                </li>
                                <li>
                                    <a href="page_ecom_products.html"><i class="gi gi-shopping_bag"></i> Products</a>
                                </li>
                                <li class="active">
                                    <a href="page_ecom_product_edit.html"><i class="gi gi-pencil"></i> Product Edit</a>
                                </li>
                                <li>
                                    <a href="page_ecom_customer_view.html"><i class="gi gi-user"></i> Customer View</a>
                                </li>
                            </ul>
                        </div>
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
                                    <form action="{{ route('products.store') }}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_pid">PID</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product_pid" name="product_pid" class="form-control" value="6825">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_name">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Enter product name..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_description">Description</label>
                                            <div class="col-md-9">
                                                <textarea id="product_description" name="product_description" class="ckeditor"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_short_description">Short Description</label>
                                            <div class="col-md-9">
                                                <textarea id="product_short_description" name="product_short_description" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_cart_description">Cart Description</label>
                                            <div class="col-md-9">
                                                <textarea id="product_cart_description" name="product_cart_description" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_category">Main Category</label>
                                            <div class="col-md-8">
                                                <select id="product_category" name="product_category" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">
                                                    <option></option>
                                                    @foreach($product_categories as $product_category)
                                                    <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_category">First Level Category</label>
                                            <div class="col-md-8">
                                                <select id="product_sub_category" name="product_sub_category" class="select-chosen" data-placeholder="Choose Sub Category.." style="width: 250px;">
                                                    <option></option>
                                                    @foreach($product_sub_categories as $product_sub_category)
                                                    <option value="{{ $product_sub_category->id }}">{{ $product_sub_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_category">Second Sub Category</label>
                                            <div class="col-md-8">
                                                <select id="product_second_sub_category" name="product_second_sub_category" class="select-chosen" data-placeholder="Choose Sub Category.." style="width: 250px;">
                                                    <option></option>
                                                    @foreach($product_second_sub_categories as $product_second_sub_category)
                                                    <option value="{{ $product_second_sub_category->id }}">{{ $product_second_sub_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_price">Price</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                                    <input type="text" id="product_price" name="product_price" class="form-control" placeholder="0,00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_sale_price">Sale Price</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                                    <input type="text" id="product_sale_price" name="product_sale_price" class="form-control" placeholder="0,00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_weight">Weight</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="text" id="product_weight" name="product_weight" class="form-control" placeholder="0,00">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_image">Image</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="file" id="product_image" name="product_image" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product_status">Available?</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                                    <input type="text" id="product_status" name="product_status" class="form-control" placeholder="0,00">
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="stock_count">Stock count</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                <input type="text" id="stock_count" name="stock_count" class="form-control" placeholder="">
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