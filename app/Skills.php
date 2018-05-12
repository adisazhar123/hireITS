<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
  protected $table = "skills";
  protected $primaryKey = "skills_id";
  public $timestamps = false;

  public function diberkati(){
    return $this->hasMany('App\Diberkati', 'skills_id');
  }
}
