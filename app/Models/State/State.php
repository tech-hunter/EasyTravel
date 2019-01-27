<?php

namespace App\Models\State;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function travels()
    {
        return $this->hasMany('App\Models\Travel\Travel', 'id', 'from');
    }


    public function hotels()
    {
        return $this->hasMany('App\Models\Hotel\Hotel', 'id', 'state_id');
    }


    public function airs()
    {
        return $this->hasMany('App\Models\Air\Air', 'id', 'from');
    }

    public function trains()
    {
        return $this->hasMany('App\Models\Train\Train', 'id', 'from');
    }

    public function hospitals()
    {
        return $this->hasMany('App\Models\Hospital\Hospital', 'id', 'state_id');
    }
}
