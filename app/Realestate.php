<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate extends Model
{
    protected $fillable = ['name', 'realestate_type_id', 'city_id','owner_id', 'land_register_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }

    public function realestateType()
    {
        return $this->belongsTo(\App\RealestateType::class);
    }

    public function owner()
    {
        return $this->belongsTo(\App\Owner::class);
    }

    public function landRegister()
    {
        return $this->belongsTo(\App\LandRegister::class);
    }

}
