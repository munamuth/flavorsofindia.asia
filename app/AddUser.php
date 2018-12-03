<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
    public function getPhone(){
    	return $this->hasMany('App\PhoneNumber', 'user_id', 'id');
    }
    public function getEmail(){
    	return $this->hasMany('App\Email', 'user_id', 'id');
    }

    public function gettype(){
    	return $this->hasOne('App\UserType', 'id', 'type_id');
    }
    public function getStatus(){
    	return $this->hasOne('App\Status', 'id', 'status_id');
    }
}

