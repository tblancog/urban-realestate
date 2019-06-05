<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'buildings';
    protected $fillable = [
      'title',
      'address',
      'url_maps',
      'from_price',
      'price',
      'description',
      'status',
    ];
}
