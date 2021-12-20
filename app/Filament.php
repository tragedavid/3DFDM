<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filament extends Model
{
    protected $fillable = [
        'created', 'updated', 'color', 'type'
    ]; 
    public $timestamps = false;
}
