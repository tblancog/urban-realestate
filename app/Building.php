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
      'location',
      'url_maps',

      'from_price',
      'price',
      'description',
      'status',

      'is_featured',
      'contact_name',
      'contact_phone',
    ];

    public function amenities(){

      return $this->belongsToMany('App\Amenity', 'building_amenities');
    }

    public function images(){

      return $this->hasMany('App\BuildingImage');
    }

    public function apartments(){

      return $this->hasMany('App\Apartment');
    }

    public function setTitleAttribute($value){
      $this->attributes['title'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

    public function getImgPathAttribute() {
        return config('images.properties_upload_path') .
                $this->table . '/' .
                $this->attributes['id'] . '/';
    }
}
