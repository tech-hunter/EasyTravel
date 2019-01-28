<?php

namespace App\Models\Air;

use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    public function state(){
        return $this->belongsTo('App\Models\State\State', 'id', 'from');
    }

    public function roomcategory(){
        return $this->belongsTo('App\Models\RoomCategory\RoomCategory');
    }
}
