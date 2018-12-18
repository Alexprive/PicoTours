<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    public function tour()
    {
        return $this->hasMany('App\Tour');
    }
}
