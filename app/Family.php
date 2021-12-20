<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'image'
    ]; 

    public function products() {
        return $this->hasMany(Product::class);
    }
}
