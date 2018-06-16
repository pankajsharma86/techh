<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total', 'delivered','payment' 
    ];
     public function orderItems(){
        return $this->belongsToMany(Product::class)->withPivot('qty','total','payment_method')
        											->withtimestamps();
     }

     public function user_settings(){
        return $this->hasOne('App\UserSetting');
    }
     
    
}
