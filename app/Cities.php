<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $fillable = [
        'Name',
        'CountryCode',
        'CountryId',
    ];

    public function country(){
        return $this->belingsTo('App\Countries');
    }
    public function locations(){
        return $this->hasMany('App\Locations');
    }
    public function donars(){
        return $this->hasMany('App\Blooddonarusers');
    }
}
