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
      'cocheras',

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
    public function features(){

        return $this->hasMany('App\ApartmentFeature');
    }

    public function setTitleAttribute($value){
      $this->attributes['title'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

    public function getImgPathAttribute()
    {
        return config('images.properties_upload_path') .
            $this->table . '/' ;
    }

     public function scopeFilterByRequest($query, Request $request)
    {
        if ($request->has('location')) {
            $query->whereHas('building', function ($q) use ($request) {
                $q->where('buildings.location', 'like', '%'.$request->input('location').'%');
            });
        }
        if ($request->has('status')) {
            $query->where('status', 'like', '%'.$request->get('status').'%');
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
        if( $saved && $this->images()->exists() ) {
            foreach ($this->images as $image) {

                if( file_exists( $image->path ) ) {

                    // New filename
                    $info = pathinfo($image->path);
                    $ext = $info['extension'];
                    $id = uniqid();
                    $newFilename = "apartment_$id.$ext";

                    \File::copy( $image->path, $clone->img_path.$newFilename );
                    $newImage = ['apartment_id' => $clone->id,
                                 'filename'=> $newFilename,
                                 'order'=> $image->order ];
                    $clone->images()->create( $newImage );
                }
            }
        }
        return $clone;
    }
}
