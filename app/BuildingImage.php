<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildingImage extends Model
{

    protected $table = 'building_images';
    protected $fillable = [ 'filename', 'order', 'building_id' ];
    protected $appends = ['path'];
    public $timestamps = false;

    public function building(){

      return $this->belongsTo('App\Building');
    }
    public function getPathAttribute() {
      $path = config('images.properties_upload_path').
              'buildings/'.
              $this->building->id.'/'.$this->filename;
      return $path;
    }
}
