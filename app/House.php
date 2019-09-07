<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'project_name',
        'slug',
        'year',
        'location',
        'services',
        'description'
    ];

     public function images(){
      return $this->hasMany('App\HouseImage');
    }

    public function setProjectNameAttribute($value){
      $this->attributes['project_name'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

     public function getImgPathAttribute() {
        return config('images.houses_upload_path') .
                $this->table . '/' ;
    }
}
