<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopEmployer extends Model
{
  protected $table = "top_employers";
  protected $primaryKey = "to_id";
  public $timestamps = false;
}
