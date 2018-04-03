<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    public function technician()
    {
        return $this->belongsTo('App\Technician' ,'technician', 'id');
    }
    public function plane()
    {
        return $this->belongsTo('App\Plane' ,'Plane_id', 'id');
    }
}
