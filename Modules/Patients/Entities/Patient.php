<?php

namespace Modules\Patients\Entities;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [];

    public function user(){
    	return $this->belongsTo('Modules\Users\Entities\User');
    }
}
