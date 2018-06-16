<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSecondSubCategory extends Model
{
    protected $table = 'product_second_sub_categories';
	protected $fillable = ['name'];

	public function product(){
    	return $this->hasMany('App\Product');
    }

    public function product_sub_category(){
    	return $this->belongsTo('App\ProductSubCategory');
    }

    public function seo(){
    	return $this->hasOne('App\Seo');
    }
}
