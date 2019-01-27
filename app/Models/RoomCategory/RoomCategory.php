<?php

namespace App\Models\RoomCategory;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    public function travelRooms()
    {
        return $this->hasMany('App\Models\Travel\Travel', 'id', 'roomtype');
    }

    public function hotelCosts()
    {
        return $this->belongsToMany('App\Models\HotelCost\HotelCost', 'id', 'room_cat_id');
    }

}
