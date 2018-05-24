<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $table = "review";
  protected $primaryKey = "review_id";
  public $timestamps = false;


  public function freelancer()
  {
      return $this->belongsTo('App\Freelancer', 'to_id', 'freelancer_id');
  }

  public function freelancer2()
  {
      return $this->belongsTo('App\Freelancer', 'from_id', 'freelancer_id');
  }

  public function employer()
  {
      return $this->belongsTo('App\Employer', 'from_id', 'employer_id');
  }
  public function job()
  {
      return $this->belongsTo('App\Job', 'job_id', 'job_id');
  }
}
