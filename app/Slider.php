<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [ 'index', 'title', 'link', 'subtitle', 'filename' ];
    protected $appends = ['path'];
    public $timestamps = false;

    public function getPathAttribute()
    {
        return config('images.slider_path'). $this->filename;
    }
}
