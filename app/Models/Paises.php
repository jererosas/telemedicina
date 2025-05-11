<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $table = 'tbl_countries';
 

    protected $fillable = [
        'id',	'name',

    ];
}
