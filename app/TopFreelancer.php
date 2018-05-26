<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopFreelancer extends Model
{
  protected $table = "top_freelancers";
  protected $primaryKey = "to_id";
  public $timestamps = false;
}
