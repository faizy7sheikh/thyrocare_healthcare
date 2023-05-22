<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menus';

    protected $fillable = [
        'title', 'url', 'parent_id', 'order', 'active'
    ];

    public function submenus()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order');
    }
}
