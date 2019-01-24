<?php

namespace App\Models\RoomCategory;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    public function travelRooms()
    {
        return $this->hasMany('App\Models\Travel\Travel', 'id', 'roomtype');
    }

    public function hotels()
    {
        return $this->belongsToMany('App\Models\Hotel\Hotel', 'id', 'room_cat_id');
    }

}
