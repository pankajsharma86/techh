<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function seo(){
    	return $this->hasOne('App\Seo');
    }
}
