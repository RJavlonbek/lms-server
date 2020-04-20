<?php

namespace Modules\Patients\Entities;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [];

    public function user(){
    	return $this->belongsTo('Modules\Users\Entities\User');
    }

    public function patient_career_infos(){
    	return $this->hasMany('Modules\Patients\Entities\PatientCareerInfo');
    }
}
