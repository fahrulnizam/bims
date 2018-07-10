<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //protected $fillable = ['building_group', 'state'];

    public function get_building_group()
    {
        return $this->belongsTo('App\Building_Group', 'building_group');
    }

    public function get_state()
    {
        return $this->belongsTo('App\State', 'state');
    }
}
