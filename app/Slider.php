<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [ 'index', 'title', 'subtitle' ];
    public $timestamps = false;
}
