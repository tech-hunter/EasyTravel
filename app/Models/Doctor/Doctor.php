<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function hospital()
    {
        return $this->belongsTo('App\Models\Hospital\Hospital', 'id', 'hospital_id');
    }
}
