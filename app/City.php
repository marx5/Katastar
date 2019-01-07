<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['city_name', 'municipal_id'];

    public function municipal()
    {
        return $this->belongsTo(\App\Municipal::class);
    }

    public function realestates()
    {
        return $this->hasMany(\App\Realestate::class);
    }

    public function owners()
    {
        return $this->hasMany(\App\Owner::class);
    }

    public function landregisters()
    {
        return $this->hasMany(\App\Landregister::class);
    }



}
