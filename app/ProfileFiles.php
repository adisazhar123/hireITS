<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileFiles extends Model
{
  protected $table = "profile_files";
  protected $primaryKey = "profile_files_id";
  public $timestamps = false;


  public function freelancer()
  {
      return $this->belongsTo('App\Freelancer', 'freelancer_id', 'user_id');
  }


}
