<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
   	protected $fillable = [
        'name', 'created_at', 'updated_at',
    ];
}
