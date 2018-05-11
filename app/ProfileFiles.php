<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileFiles extends Model
{
  protected $table = "profile_files";
  protected $primaryKey = "profile_files_id";
  public $timestamps = false;
}
