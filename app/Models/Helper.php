<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    function superhero()
    {
        return $this->belongsTo(SuperHero::class);
    }
}
