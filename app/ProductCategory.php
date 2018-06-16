<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	protected $fillable = ['name'];
	protected $table = 'product_categories';

	public function product_sub_category(){
    	return $this->hasMany('App\ProductSubCategory');
    }

    public function product(){
    	return $this->hasMany('App\Product');
    }

    public function seo(){
    	return $this->hasOne('App\Seo');
    }
}
