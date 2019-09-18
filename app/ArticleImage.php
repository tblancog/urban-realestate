<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    protected $table = 'article_images';
    protected $fillable = [ 'filename', 'order', 'article_id' ];
    protected $appends = ['path'];
    public $timestamps = false;

    public function article(){

      return $this->belongsTo('App\Article');
    }
    public function getPathAttribute() {
      return config('images.articles_upload_path').$this->filename;
    }
}
