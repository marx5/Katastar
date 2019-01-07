<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ownership extends Model
{
    protected $fillable = ['realestate_id', 'owner_id'];


    public function owners()
    {
        return $this->belongsToMany(\App\Owner::class);
    }

    public function realestates()
    {
        return $this->belongsToMany(\App\Realestate::class);
    }

}
