<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodgroups extends Model
{
    protected $fillable = [
        'BloodGroupName',
        'CreationDate',
        'IsActive',
    ];

    public function donars(){
        return $this->hasMany('App\Blooddonarusers');
    }
}
