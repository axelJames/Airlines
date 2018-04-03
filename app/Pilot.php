<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    public function employee()
    {
        return $this->belongsTo('App\Employee' ,'id', 'id');
    }
}
