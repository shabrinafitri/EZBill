<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = [
        'id_payment', 'id_customer', 'date', 'billing_month',
    ];
}
