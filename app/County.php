<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = ['county_name', 'continent_id'];

    public function continent()
    {
        return $this->belongsTo(\App\Continent::class);
    }
    public function municipals()
    {
        return $this->hasMany(\App\Municipal::class);
    }
}
