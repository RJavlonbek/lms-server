<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [];

    public function registeredPatients(){
    	return $this->hasMany('Modules\Patients\Entities\Patient');
    }
}
