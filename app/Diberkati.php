<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diberkati extends Model
{
  protected $table = "diberkati";
  protected $primaryKey = "freelancer_id";
  public $timestamps = false;

  public function skills()
  {
      return $this->belongsTo('App\Skills', 'skills_id');
  }
}
