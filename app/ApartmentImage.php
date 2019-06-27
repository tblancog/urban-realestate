<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentImage extends Model
{
    protected $table = 'apartment_images';
    protected $fillable = [ 'filename', 'order', 'apartment_id' ];
    public $timestamps = false;

    public function apartment(){

      return $this->belongsTo('App\Apartment');
    }
}
