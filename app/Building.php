<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'buildings';
    protected $fillable = [
      'title',
      'slug',
      'address',
      'url_maps',
      'from_price',
      'price',
      'description',
      'status',
      'is_featured',
      'contact_name',
      'contact_phone',
      'amenities',
      'images',
    ];

    public function amenities(){

      return $this->belongsToMany('App\Amenity', 'building_amenities');
    }

    public function images(){

      return $this->hasMany('App\BuildingImage', 'building_id');
    }

    public function apartments(){

      return $this->hasMany('App\Apartment');
    }

    public function getStatusAttribute(){

      return ucwords($this->attributes['status']);
    }

    public function setTitleAttribute($value){
      $this->attributes['title'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

}
