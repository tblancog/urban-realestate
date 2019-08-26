<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentFeature extends Model
{
    protected $fillable = [
        'title',
        'value',
        'type'
    ];
    public $timestamps = false;
}
