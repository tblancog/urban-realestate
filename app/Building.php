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
      'is_featured'
    ];

    public function amenities(){

      return $this->belongsToMany('App\Amenity', 'building_amenities');
    }

    public function images(){

      return $this->hasMany('App\Image');
    }

    public function getStatusAttribute(){

      return ucwords($this->attributes['status']);
    }
}
