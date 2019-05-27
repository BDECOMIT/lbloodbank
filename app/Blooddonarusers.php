<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blooddonarusers extends Model
{
    protected $fillable = [
        'FirstName',
        'LastName',
        'Username',
        'Email',
        'PasswordHash',
        'PasswordSalt',
        'MobileNumber',
        'Gender',
        'DateOfBirth',
        'BloodGroupId',
        'CountryId',
        'CityId',
        'LocationId',
        'CreationDate',
        'IsActive',
    ];

    public function bloodGroup(){
        return $this->belongsToMany('App\Bloodgroups');
    }
    public function citie(){
        return $this->belongsToMany('App\Cities');
    }
    public function countrie(){
        return $this->belongsToMany('App\Countries');
    }
    public function location(){
        return $this->belongsToMany('App\Locations');
    }
}
