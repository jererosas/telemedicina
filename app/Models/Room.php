<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table= 'salas';
 

    protected $fillable = [
        'id','created_at','updated_at','status','name','sid'
    ];

}
