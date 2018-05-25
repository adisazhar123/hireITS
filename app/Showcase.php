<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
  protected $table = "showcase";
  protected $primaryKey = "showcase_id";
  public $timestamps = false;

  public function freelancer()
  {
      return $this->belongsTo('App\Freelancer', 'freelancer_id', 'freelancer_id');
  }

  public function skills(){
    return $this->hasMany('App\ShowcaseSkill', 'showcase_id');
  }

}
