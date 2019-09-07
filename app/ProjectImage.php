<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table = 'project_images';
    protected $fillable = [ 'filename', 'order', 'project_id' ];
    protected $appends = ['path'];
    public $timestamps = false;

    public function project(){

      return $this->belongsTo('App\Project');
    }
    public function getPathAttribute() {
      return config('images.projects_upload_path').$this->filename;
    }
}
