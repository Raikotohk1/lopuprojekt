<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    
    public function dances()
    {
        return $this->belongsToMany(Dance::class, 'dance_routine');
    }
}
