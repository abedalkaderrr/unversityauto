<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matrial extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}