<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    public function supplier()
    {
        return $this->hasMany('App\Supplier');
    }
}
