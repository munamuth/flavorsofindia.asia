<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    public function getFacility()
    {
    	return $this->hasOne("App\Facility", 'id', 'room_type_id');
    }
}
