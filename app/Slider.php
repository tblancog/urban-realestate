<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [ 'index', 'title', 'subtitle', 'base64img' ];
    public $timestamps = false;
}
