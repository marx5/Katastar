<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = ['county_name'];


    public function municipals()
    {
        return $this->hasMany(\App\Municipal::class);
    }
}
