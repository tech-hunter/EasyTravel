<?php

namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor\Doctor', 'id', 'hospital_id');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State\State', 'id', 'state_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User\User', 'id', 'user_id');
    }
}
