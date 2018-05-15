<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobFiles extends Model
{
  protected $table = "job_files";
  protected $primaryKey = "id";
  public $timestamps = false;
}
