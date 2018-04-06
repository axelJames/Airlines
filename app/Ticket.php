<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function flight()
    {
        return $this->belongsTo('App\ScheduledFlight' ,'flight_id', 'id');
    }
    public function seat()
    {
        return $this->belongsTo('App\Seat' ,'seat_id', 'id');
    }
}
