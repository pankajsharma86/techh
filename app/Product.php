<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\ProductSubCategory;

class Product extends Model
{
    protected $fillable = ['pid', 'sku', 'name', 'price', 'list_price', 'weight', 'short_desc', 'long_desc', 'cart_desc', 'image', 'stock', 'is_live', 'slug'];


    public function product_second_sub_category(){
    	return $this->belongsTo('App\ProductSecondSubCategory');
    }

    public function product_sub_category(){
    	return $this->belongsTo('App\ProductSubCategory');
    }

    public function product_category(){
    	return $this->belongsTo('App\ProductCategory');
    }

    public function wishlist(){
        return $this->hasOne('App\Wishlist');
    }

    public function seo(){
        return $this->hasOne('App\Seo');
    }

    protected $table = 'products';
}


