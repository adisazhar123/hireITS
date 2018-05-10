<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
  protected $table = "bid";
  protected $primaryKey = "bid_id";
  public $timestamps = false;
}
