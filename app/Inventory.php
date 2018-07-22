<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;
use App\Manufacturer;

class Inventory extends Model
{
    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }
}
