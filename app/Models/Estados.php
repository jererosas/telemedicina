<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'tbl_states';
 

    protected $fillable = [
        'id',	'name',	'stateCode','countryId',

    ];
}
