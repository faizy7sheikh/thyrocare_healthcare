<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableSlot extends Model
{
    //
    protected $fillable = [
        'date','start_time','end_time'
    ];
}
