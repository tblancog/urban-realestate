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

      'floor',
      'department',
      'code',

      'url_maps',
      'price',
      'area',
      'rooms',

      'description',
      'status',
      'contact_name',
      'contact_phone',
      
      'building_id'
    ];

    public function amenities(){

      return $this->belongsToMany('App\Amenity', 'apartment_amenities');
    }

    public function images(){

      return $this->hasMany('App\ApartmentImage');
    }
    public function building(){

      return $this->belongsTo('App\Building');
    }

    public function getStatusAttribute(){

      return ucwords($this->attributes['status']);
    }

    public function setTitleAttribute($value){
      $this->attributes['title'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

    public function getImgPath($value){
      return config('images.properties_upload_path').$this->attributes['slug'].'/'.$value;
    }
}
