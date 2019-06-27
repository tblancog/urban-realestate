<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildingImage extends Model
{

    protected $table = 'building_images';
    protected $fillable = [ 'filename', 'order', 'building_id' ];
    public $timestamps = false;
  
    public function building(){

      return $this->belongsTo('App\Building');
    }
}
