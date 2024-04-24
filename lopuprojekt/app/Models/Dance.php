<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dance extends Model
{
    use HasFactory;

    public function routines()
    {
        return $this->belongsToMany(Routine::class, 'dance_routine');
    }

    public function costume1()
    {
        return $this->belongsTo(Costume::class, 'costume1_id');
    }

    public function costume2()
    {
        return $this->belongsTo(Costume::class, 'costume2_id');
    }
}
