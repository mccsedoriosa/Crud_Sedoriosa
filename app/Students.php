<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
    	'idnumber','name', 'phone', 'address'
    ];
}
