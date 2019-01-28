<?php

namespace App\Models\TicketClass;

use Illuminate\Database\Eloquent\Model;

class TicketClass extends Model
{
    public function airTravels()
    {
        return $this->hasMany('App\Models\Travel\Travel', 'id', 'at_class');
    }

    public function trainTravels()
    {
        return $this->hasMany('App\Models\Travel\Travel', 'id', 'tt_class');
    }


    public function airs()
    {
        return $this->hasMany('App\Models\Air\Air');
    }

    public function trains()
    {
        return $this->hasMany('App\Models\Train\Train', 'id', 'tclass_id');
    }
}
