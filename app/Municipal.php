<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipal extends Model
{
    protected $fillable = ['municipal_name', 'county_id'];


    public function cities()
    {
        return $this->hasMany(\App\City::class);
    }

    public function county()
    {
        return $this->belongsTo(\App\County::class);
    }
}
