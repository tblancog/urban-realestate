<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $table = 'amenities';

    public function building(){

      return $this->belongsToMany('App\Building', 'building_amenities');
    }

    // public function apartment(){

    //   return $this->belongsToMany('App\Apartment');
    // }
}
