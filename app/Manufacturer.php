<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Inventory;

class Manufacturer extends Model
{
    public function inventory() {
        return $this->hasMany(Inventory::class);
    }
}
