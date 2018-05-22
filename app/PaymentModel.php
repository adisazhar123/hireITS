<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{

  const CREATED_AT = 'time';
  const UPDATED_AT = 'time';


  protected $table = "payment";
  protected $primaryKey = "payment_id";
  public $incrementing = true;
  public $timestamps = true;

}
