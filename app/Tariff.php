<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $table = 'tariff';
    protected $fillable = [
        'tariff_codes', 'power', 'tariff_per_kwh',
    ];
}
