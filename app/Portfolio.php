<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
  protected $table = "portfolio";
  protected $primaryKey = "portfolio_id";
  public $timestamps = false;

  public function freelancer()
  {
      return $this->belongsTo('App\Freelancer', 'freelancer_id');
  }
}
