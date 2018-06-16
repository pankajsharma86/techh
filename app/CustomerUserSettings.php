<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerUserSettings extends Model
{
    protected $guard = "customer_user_settings";
	
    protected $table = "customer_user_settings";

    protected $fillable = ['site_name', 'user_id', 'address', 'contact_number', 'contact_email'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
