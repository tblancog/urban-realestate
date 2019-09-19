<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'slug',
        'description',
    ];

     public function images(){
      return $this->hasMany('App\ArticleImage');
    }

    public function setTitleAttribute($value){
      $this->attributes['title'] = $value;
      $this->attributes['slug'] = str_slug($value);
    }

    public function getImgPathAttribute() {
        return config('images.articles_upload_path');
    }
}
