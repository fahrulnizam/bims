<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //

    public function building_group()
    {
        return $this->belongsToMany('App\Building_Group', 'building_group');
    }

    public function state()
    {
        return $this->belongsToMany('App\State', 'state');
    }
}
