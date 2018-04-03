<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    public function employee()
    {
        return $this->belongsTo('App\Employee' ,'id', 'id');
    }
}
