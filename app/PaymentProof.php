<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentProof extends Model
{
    protected $table = "paymentProof";
    protected $primaryKey = "id";
    protected $fillable = [
        'account_name',
        'account_number',
        'bank_account',
        'time_of_transfer',
        'transfer_proof_path',
        'job_id'
    ];
    public $timestamps = false;
}
