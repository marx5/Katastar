<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate extends Model
{
    protected $fillable = ['name', 'realestate_type_id', 'city_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }

    public function realestate_type()
    {
        return $this->belongsTo(\App\Realestate_type::class);
    }

    public function ownership()
    {
        return $this->belongsToMany(\App\Owner::class);
    }
}
