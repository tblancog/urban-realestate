<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

class Apartment extends Model
{
    protected $table = 'apartments';
    protected $fillable = [
      'title',
      'slug',
      'address',
      'location',

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

     public function scopeFilterByRequest($query, Request $request)
    {
        if ($request->has('location')) {
            $query->where('location', '=', $request->get('location'));
        }

        if ($request->has('status')) {
            $query->where('status', 'like', '%'.$request->get('status'));
        }

        return $query;
    }
    public function findOrDefaultImage() {
      if($this->images()->exists() && file_exists($this->getImgPath( $this->images[0]->filename )) ){
        return $this->getImgPath( $this->images[0]->filename );
      }
      $faker = Factory::create();
      return $faker->imageUrl($width = 640, $height = 480); 
    }

    public function findOrDefaultImages() {
      $images = collect();
      if( $this->images()->exists() ){
        $this->images()->each(function($img) use ($images) {
          $images->push($img);
        });
      } else {
        $faker = Factory::create();
        $images->push(['filename'=> $faker->imageUrl($width = 640, $height = 480)]); 
      }
      return $images;
    }
}
