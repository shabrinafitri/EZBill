<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customer';
    protected $fillable = [
        'id_customer', 'address', 'no_meter', 'tariff_codes',
    ];
}
