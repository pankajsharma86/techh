<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*  paypal routes */

/* Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',)); */


Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));

/*  paypal routes  end */


Route::get('/', 'FrontendController@index')->name('front');
Route::get('/blog', 'FrontendController@blog');
Route::get('/products', 'FrontendController@products');
Route::get('/careers', 'FrontendController@careers')->name('pages.carrers');

Route::get('/blog-detail/{slug}', [
        'uses' => 'FrontendController@single',
        'as' => 'blog.detail'
    ]);

Route::post('/blogcomment/{id}', [
        'uses' => 'FrontendController@addcomment',
        'as' => 'blog.comment'
    ]);

Route::get('electrical-conduit-category/{slug}', [
        'uses' => 'FrontendController@category',
        'as' => 'product_maincategory'
    ]);
Route::get('electrical-conduit-subcategory/{slug1}/{slug}', [
        'uses' => 'FrontendController@product_sub_category',
        'as' => 'product.subcategory'
    ]);



Route::get('electrical-conduit-secondsubcategory/{slug1}/{slug2}/{slug3}', [
        'uses' => 'FrontendController@product_category',
        'as' => 'product.category'
    ]);

Route::get('conduit/{slug_category?}/{slug_subcategory?}/{slug?}', [
        'uses' => 'FrontendController@product_single',
        'as' => 'product.single'
    ]);



//========shopping cart==============//

Route::post('/cart/add', [
        'uses' => 'ShoppingController@add_to_cart',
        'as' => 'cart.add'
    ]);

Route::get('/cart', [
     'uses' => 'ShoppingController@cart',
     'as' => 'cart'
]);

Route::get('/cart/delete/{id}', [
    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'
]);

Route::get('/cart/incr/{id}/{qty}', [
        'uses' => 'ShoppingController@incr',
        'as' => 'cart.incr'
    ]);

Route::get('/cart/decr/{id}/{qty}', [
        'uses' => 'ShoppingController@decr',
        'as' => 'cart.decr'
    ]);

Route::get('/cart/rapid/add/{id}', [
        'uses' => 'ShoppingController@rapid_add',
        'as' => 'cart.rapid.add'
    ]);

//========pages=============//

Route::get('/about', 'FrontendController@about');
Route::get('/mission', 'FrontendController@mission');
Route::get('/contact', 'FrontendController@contact');

//======wishlist=======//

Route::get('/wishlist', 'HomeController@wishlist');


Route::get('/wishlists/add/{id}', [
                'uses' => 'WishlistController@add',
                'as' => 'wishlists.add'
            ]);
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
Route::get('/wishlists', [
                'uses' => 'HomeController@wishlist',
                'as' => 'user.wishlist'
            ]);
Route::get('/checkout1', 'FrontendController@checkout1')->name('shopping.checkout1');

Route::post('/checkout1', 'FrontendController@checkout1')->name('shopping.checkout1');
Route::post('/checkout2', 'FrontendController@checkout2')->name('shopping.checkout2');
Route::post('/checkout3', 'FrontendController@checkout3')->name('shopping.checkout3');

Route::post('/checkout4', 'FrontendController@checkout4')->name('shopping.checkout4');
Route::get('/order/{id}', 'FrontendController@checkout6')->name('shopping.checkout6');
Route::resource('account', 'AccountController');
Route::post('/cart/place_order', [
            'uses' => 'FrontendController@pay',
            'as' => 'cart.checkout'
        ]);

Route::post('/cart/order_placed', [
        'uses'=> 'FrontendController@cashpay',
        'as' => 'cart.checkout.cash'
    ]);

});

//==========================================//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home1');
Route::get('/users/logout', 'Auth\loginController@userlogout')->name('user.logout');
Route::get('admin/login', 'Auth\AdminloginController@showloginform')->name('admin.login');
Route::post('admin/login', 'Auth\AdminloginController@login')->name('admin.login.submit');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){



Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/logout', 'Auth\AdminloginController@adminlogout')->name('admin.logout');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/password/reset{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::resource('posts','PostController');
Route::get('/post/delete/{id}', [
        'uses' => 'PostController@delete',
        'as' => 'posts.delete'
    ]);
Route::get('/product/delete/{id}', [
        'uses' => 'PostController@delete',
        'as' => 'posts.delete'
    ]);

Route::post('/postseo/edit/{id}', [
            'uses' => 'PostController@seoedit',
            'as' => 'postseo.edit'
        ]);

Route::post('/productseo/edit/{id}', [
            'uses' => 'ProductController@seoedit',
            'as' => 'productseo.edit'
        ]);

Route::post('/productcategoryseo/edit/{id}', [
            'uses' => 'ProductcategoryController@seoedit',
            'as' => 'productcategoryseo.edit'
        ]);

Route::post('/productsubcategoryseo/edit/{id}', [
            'uses' => 'ProductsubcategoryController@seoedit',
            'as' => 'productsubcategoryseo.edit'
        ]);

Route::post('/productsecondsubcategoryseo/edit/{id}', [
            'uses' => 'ProductsecondsubcategoryController@seoedit',
            'as' => 'productsecondsubcategoryseo.edit'
        ]);


Route::get('/edit/{id}', 'OrderController@edit')->name('admin.order.edit');
Route::post('/update/{id}', 'OrderController@update')->name('admin.order.update');
//==user//==

Route::get('/user', 'PostController@user')->name('admin.user.index');

//products

Route::resource('products', 'ProductController');
Route::get('/product/delete/{id}', [
        'uses' => 'ProductController@delete',
        'as' => 'admin.product.delete'
       ]);
Route::resource('productcategories', 'ProductCategoryController');
Route::get('/product_category/delete/{id}', [
        'uses' => 'ProductCategoryController@delete',
        'as' => 'admin.productcategory.delete'
        ]);
Route::resource('productsubcategories', 'ProductSubCategoryController');
    Route::get('/product_sub_category/delete/{id}' , [
                'uses' => 'ProductSubCategoryController@delete',
                'as' => 'admin.productsubcategory.delete'
            ]);
Route::resource('productsecondsubcategories', 'ProductSecondSubCategoryController');
Route::get('/product_second_sub_category/delete/{id}', [
                'uses' => 'ProductSecondSubCategoryController@delete',
                'as' => 'admin.productsecondsubcategory.delete'
            ]);

});
 