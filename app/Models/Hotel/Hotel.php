<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function travels(){
        return $this->belongsTo('App\Models\Travel\Travel', 'id', 'hotel_id');
    }
    public function state()
    {
        return $this->belongsTo('App\Models\State\State', 'id', 'state_id');
    }

    public function roomCategory()
    {
        return $this->belongsToMany('App\Models\RoomCategory\RoomCategory', 'id', 'room_cat_id');
    }

}
