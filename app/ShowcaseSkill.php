<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowcaseSkill extends Model
{
  protected $table = "showcase_skills";
  protected $primaryKey = "showcase_id";
  public $timestamps = false;


  public function showcase()
  {
      return $this->belongsTo('App\Showcase', 'showcase_id', 'showcase_id');
  }

  public function categories()
  {
      return $this->belongsTo('App\Skills', 'skills_id', 'skills_id');
  }

}
