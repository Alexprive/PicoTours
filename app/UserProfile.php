<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
//    public function user()
//    {
//        return $this->hasOne('App\User');
//    }

      public function tour()
      {
          return $this->hasMany('App\Tour');
      }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
