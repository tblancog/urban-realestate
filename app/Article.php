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
        'section',
        'source',
    ];
    protected $dates = [
      'created_at'
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

    // public function setCreatedAtAttribute($value)
    // {
    //     $this->attributes['created_at'] = Carbon::createFromFormat('dd/MM/yyyy',$value);

    // }
}
