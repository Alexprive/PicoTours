<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function tour()
    {
        return $this->hasMany('App\Tour');
    }
}
