<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function drivers()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
