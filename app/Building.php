<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

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

    public function getImgPath($value) {
      return config('images.properties_upload_path').$this->attributes['slug'].'/'.$value;
    }

    public function findOrDefaultImage() {
      if($this->images()->exists() && file_exists($this->getImgPath( $this->images[0]->filename )) ){
        return $this->getImgPath( $this->images[0]->filename );
      }
      $faker = Factory::create();
      return $faker->imageUrl($width = 640, $height = 480);
    }

}
