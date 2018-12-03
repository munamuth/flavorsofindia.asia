<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypePhoto extends Model
{
    public function getPhoto()
    {
    	return $this->hasOne('App\Photo', 'id');
    }
}
