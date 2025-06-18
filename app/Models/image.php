<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;

    // protected $fillable = 
    // [
    //     'route',
    //     'imageable_id',
    //     'imageable_type'
        
    // ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
