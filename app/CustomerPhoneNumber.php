<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPhoneNumber extends Model
{
    public function customer()
    {
        return $this->belongsTo('App\CustomerProfile' ,'customer_id', 'id');
    }
}
