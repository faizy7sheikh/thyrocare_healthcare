<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageTest extends Model
{
    protected $table = 'package_test';

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id', 'id');
    }

}
