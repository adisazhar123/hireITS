<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
  protected $table = "employer";
  protected $primaryKey = "employer_id";
  public $timestamps = false;

  public function job(){
    return $this->hasMany('App\Job', 'employer_id');
  }
  public function review(){
      return $this->hasMany('App\Review', 'to_id', 'employer');
    }

}
