<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HarusBisaSkill extends Model
{
  protected $table = "harus_bisa_skill";
  protected $primaryKey = "job_id";
  public $timestamps = false;

  public function job()
  {
      return $this->belongsTo('App\Job', 'job_id');
  }
  public function skills()
  {
      return $this->belongsTo('App\Skills', 'skills_id');
  }
}
