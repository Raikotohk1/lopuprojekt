<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costume extends Model
{
    use HasFactory;

    public function dancesAsCostume1()
    {
        return $this->hasMany(Dance::class, 'costume1_id');
    }

    public function dancesAsCostume2()
    {
        return $this->hasMany(Dance::class, 'costume2_id');
    }
}
