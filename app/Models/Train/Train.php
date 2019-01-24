<?php

namespace App\Models\Train;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public function state(){
        return $this->belongsTo('App\Models\State\State', 'id', 'from');
    }

    public function roomcategory(){
        return $this->belongsTo('App\Models\RoomCategory\RoomCategory', 'id', 'tclass_id');
    }
}
