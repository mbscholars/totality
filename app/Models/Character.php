<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function occupation()
    {
        return $this->hasOne(Occupation::class, 'character_id', 'id');
    }
}
