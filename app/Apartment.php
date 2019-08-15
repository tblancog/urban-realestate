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

      'floor',
      'department',
      'code',
      'price',

      // Información Básica
      'rooms',
      'dormitorios',
      'banios',
      'toilettes',
      'antiguedad',
      'expensas',
      'orientacion',
      'disposicion',

      // Area
      'area',
      'area_semicubierta',
      'area_total_construido',

      'description',
      'status',
      'contact_name',
      'contact_phone',

      'building_id'
    ];

    public function images(){

      return $this->hasMany('App\ApartmentImage');
    }
    public function building(){

      return $this->belongsTo('App\Building');
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

    public function duplicateApartament()
    {
        $clone = $this->load('images', 'building')
                      ->replicate();
        $faker = Factory::create();
        $random = $faker->unique->randomNumber(3);
        $clone->title = "(Copia $random) " . $this->title;
        $saved = $clone->save();

        // Copy images in new location if there are images
        $dir = config('images.properties_upload_path') . $this->slug;
        if( $saved &&
            $this->images()->exists() &&
            is_dir( $dir ) ) {

            \File::copyDirectory($dir, config('images.properties_upload_path') . str_slug($clone->title));

            foreach ($this->images as $image) {
                $clone->images()->create($image->toArray());
            }
        }
        return $clone;
    }
}
