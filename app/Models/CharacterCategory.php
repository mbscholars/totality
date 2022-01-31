<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
