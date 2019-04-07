<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $table = 'billing';
    protected $fillable = [
        'id_customer', 'month', 'year', 'amount_meter', 'billing_charges', 'status',
    ];
}
