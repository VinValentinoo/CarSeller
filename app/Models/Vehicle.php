<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function model(){
        return $this->belongsTo(CarModel::class, 'model_id');
    }
}
