<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    public function product(){
    	return $this->belongsTo('App\Product');
    }

	public function post(){
    	return $this->belongsTo('App\Post');
    }   

    public function product_category(){
    	return $this->belongsTo('App\ProductCategory');
    } 

    public function product_sub_category(){
    	return $this->belongsTo('App\ProductSubCategory');
    }

    public function product_second_sub_category(){
    	return $this->belongsTo('App\ProductSecondSubCategory');
    }
}
