<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';
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
