<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $fillable = [
        'LocationName',
        'CityId',
        'CreationDate',
        'IsActive',
    ];

    public function cities(){
        return $this->belingsTo('App\Cities');
    }
    public function donars(){
        return $this->hasMany('App\Blooddonarusers');
    }
    // public function countries(){
    //     return $this->belingsTo('App\Countries');
    // }
}
