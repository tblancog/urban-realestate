<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';
    protected $fillable = [
      'title',
      'slug',
      'address',
      'image_name',
      'url_maps',
      'from_price',
      'price',
      'description',
      'status',
      'is_featured',
      'contact_name',
      'contact_phone',
      'building_id'
    ];

    public function amenities(){

      return $this->belongsToMany('App\Amenity', 'building_amenities');
    }

    public function images(){

      return $this->hasMany('App\Image', 'building_id');
    }
    public function building(){

      return $this->hasMany('App\Building', 'building_id');
    }

    public function getStatusAttribute(){

      return ucwords($this->attributes['status']);
    }

    public function setTitleAttribute($value){
      $this->attributes['title'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

    // public function getImageNameAttribute($value){

    //   // 
    //   $this->attributes['image_name'] = 
    // }
}
