<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class customer extends Model
{
    //
    
    protected $fillable = [
        'name',
        'contact',
        'address',
        'pets_id'
    ];

    public function pets(): BelongsTo
    {
        return $this->belongsTo(pets::class);
    }
}
