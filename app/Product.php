<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'created', 'updated', 'name', 'slug', 'description','layer_height', 'price', 'filament_id'
    ]; 
    public $timestamps = false;

    public function filament()
    {
        return $this->belongsTo('App\Filament');
    }

    public function filaments()
    {
        return $this->hasMany(Filament::class);
    }
}
