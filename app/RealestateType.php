<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealestateType extends Model
{
    protected $fillable = ['name'];
    
    public function realestates()
    {
        return $this->hasMany(\App\Realestate::class);
    }
}
