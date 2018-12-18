<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function userprofile()
    {
        return $this->belongsTo('App\Userprofile');
    }

    public function tourcategory()
    {
        return $this->belongsTo('App\TourCategory');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
