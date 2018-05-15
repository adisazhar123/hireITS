<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WonBy extends Model
{
  protected $table = "won_by";
  protected $primaryKey = "won_by_id";
  public $timestamps = false;

  public function job()
  {
      return $this->belongsTo('App\Job', 'job_id');
  }
}
