<?php

namespace Modules\Patients\Entities;

use Illuminate\Database\Eloquent\Model;

class PatientCareerInfo extends Model
{
	protected $table = 'patient_career_info';
    protected $fillable = [];

    public function patient(){
    	return $this->belongsTo('Patient');
    }
}
