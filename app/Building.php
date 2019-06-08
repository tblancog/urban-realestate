<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'buildings';
    protected $fillable = [
      'title',
      'address',
      'url_maps',
      'from_price',
      'price',
      'description',
      'status',
      'highlighted'
    ];

    public function amenities(){

      return $this->hasMany('App\Amenity');
    }

    public function images(){

      return $this->hasMany('App\Image');
    }
}
