<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['name', 'city_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }

    public function realestates()
    {
        return $this->belongsToMany(\App\Owner::class);
    }
}
