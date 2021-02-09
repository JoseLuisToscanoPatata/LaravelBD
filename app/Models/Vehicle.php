<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function versions()
    {
        return $this->belongsTo(Version::class, 'version_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function rides()
    {
        return $this->hasMany(Ride::class);
    }
}
