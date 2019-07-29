<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentImage extends Model
{
    protected $table = 'apartment_images';
    protected $fillable = [ 'filename', 'order', 'apartment_id' ];
    protected $appends = ['path'];
    public $timestamps = false;


    public function apartment() {
      return $this->belongsTo('App\Apartment');
    }
    public function getPathAttribute() {
      $path = config('images.properties_upload_path')
              .$this->apartment->slug.'/'.$this->filename;
      return $path;
    }
}
