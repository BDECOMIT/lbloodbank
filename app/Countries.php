<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Code', 'Name', 'Code2',
    ];

    public function cities(){
        return $this->hasMany('App\Cities');
    }
    public function donars(){
        return $this->hasMany('App\Blooddonarusers');
    }
}
