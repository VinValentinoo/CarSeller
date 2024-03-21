<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brand() {
        return $this->belongsTo(Brand::class, "brand_id");
    }

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}
