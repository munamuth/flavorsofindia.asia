<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{


	protected $fillable = [
        'name', 'status_id', 'description',
    ];


    public function getRoomFacility()
    {
    	return $this->hasMany("App\RoomFacility", 'room_type_id', 'id');
    }

    public function getRoomTypePhoto()
    {
    	return $this->hasMany("App\RoomTypePhoto", 'room_type_id', 'id');
    }
    public function getStatus()
    {
    	return $this->hasOne('App\Status', 'id', 'status_id');
    }


}
