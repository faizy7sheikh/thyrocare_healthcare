<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable=['name','price','discount','status'];

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'package_test');
    }

}
