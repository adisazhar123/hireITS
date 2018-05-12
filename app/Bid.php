<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
  protected $table = "bid";
  protected $primaryKey = "bid_id";
  public $timestamps = false;

  public function job()
  {
      return $this->belongsTo('App\Job', 'job_id');
  }
  public function freelancer()
  {
      return $this->belongsTo('App\Freelancer', 'freelancer_id');
  }
}
