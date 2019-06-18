<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentImage extends Model
{
    protected $table = 'apartment_images';
    // private $storage_path = 'images';
  
    public function apartment(){

      return $this->belongsTo('App\Apartment');
    }
}
