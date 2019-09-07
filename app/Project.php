<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
      return $this->hasMany('App\ProjectImage');
    }

    public function setProjectNameAttribute($value){
      $this->attributes['project_name'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

     public function getImgPathAttribute() {
        return config('images.projects_upload_path') .
                $this->table . '/' ;
    }
}
