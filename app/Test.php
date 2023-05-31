<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable=['name','status'];

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_test');
    }

}
