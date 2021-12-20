<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_filament extends Model
{
    protected $fillable = [
        'product_id', 'filament_id'
    ];
}
