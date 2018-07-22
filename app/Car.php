<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invetory;

class Car extends Model
{
    public function inventory() {
        return $this->hasOne(Inventory::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
