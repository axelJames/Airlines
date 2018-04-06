<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduledFlight extends Model
{
    public function starta()
    {
        return $this->belongsTo('App\Airport' ,'start', 'id');
    }
    public function desta()
    {
        return $this->belongsTo('App\Airport' ,'dest', 'id');
    }
}
