<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperHero extends Model
{
    use HasFactory;
    protected $table = 'superheros';

    protected $fillable = [
        'name',
    ];

    public function helpers()
    {
        return $this->hasMany(Helper::class);
    }
}
