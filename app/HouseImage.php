<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseImage extends Model
{
    protected $table = 'house_images';
    protected $fillable = [ 'filename', 'order', 'house_id' ];
    protected $appends = ['path'];
    public $timestamps = false;

    public function house(){

      return $this->belongsTo('App\House');
    }
    public function getPathAttribute() {
      $path = config('images.houses_upload_path').
              'houses/'.$this->filename;
      return $path;
    }
}
