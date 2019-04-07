<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilization extends Model
{
    protected $table = 'utilization';
    protected $fillable = [
        'id_customer', 'month', 'year', 'initial_meter', 'final_meter',
    ];
}
