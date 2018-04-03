<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function plane()
    {
        return $this->belongsTo('App\Plane' ,'plane_id', 'id');
    }
}
