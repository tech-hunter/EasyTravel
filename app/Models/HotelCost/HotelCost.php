<?php

namespace App\Models\HotelCost;

use Illuminate\Database\Eloquent\Model;

class HotelCost extends Model
{
    public function roomCategory()
    {
        return $this->belongsToMany('App\Models\RoomCategory\RoomCategory', 'id', 'room_cat_id');
    }

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel\Hotel', 'id', 'hotel_id');
    }
}
