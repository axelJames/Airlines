<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    public function model()
    {
        return $this->belongsTo('App\PlaneModel' ,'model', 'id');
    }
}
