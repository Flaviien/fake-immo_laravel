<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    public function admin()
    {
        return $this->belongsTo('App\User');
    }

    public function customer()
    {
        return $this->belongsToMany('App\User');
    }
}
