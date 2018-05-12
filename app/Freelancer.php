<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = "freelancer";
    protected $primaryKey = "freelancer_id";
    public $timestamps = false;

    public function portfolio(){
      return $this->hasMany('App\Portfolio', 'freelancer_id');
    }
    public function bid(){
      return $this->hasMany('App\Bid', 'freelancer_id');
    }
}
