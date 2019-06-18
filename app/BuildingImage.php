<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildingImage extends Model
{

    protected $table = 'building_images';
    // private $storage_path = 'images';
  
    public function building(){

      return $this->belongsTo('App\Building');
    }

    // public function apartment(){

    //   return $this->belongsTo('App\Apartment');
    // }

    // public function getStoragePathAttribute(){

    //   return $this->attributes['storage_path'] = $this->storage_path;
    // }
}
