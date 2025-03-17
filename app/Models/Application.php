<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'clicks',
        'url',
        'thumbnail',
        'is_active',
        'position',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'clicks' => 'integer',
    ];
}
