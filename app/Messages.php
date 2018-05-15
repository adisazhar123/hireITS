<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
  protected $table = "messages";
  protected $primaryKey = "msg_id";
  const CREATED_AT = 'sent_at';
  const UPDATED_AT = 'sent_at';

  public $timestamps = true;

}
