<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pets extends Model
{
    //

    protected $fillable = [
        "name",
        "age",
        "status"
    ];
   

}