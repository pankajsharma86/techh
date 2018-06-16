<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    
	protected $table = 'product_sub_categories';
	protected $fillable = ['name'];

    public function product_category(){
    	return $this->belongsTo('App\ProductCategory');
    }

    public function product(){
    	return $this->hasMany('App\Product');
    }

    public function product_second_sub_category(){
    	return $this->hasMany('App\ProductSecondSubCategory');
    }

    public function seo(){
        return $this->hasOne('App\Seo');
    }
}
