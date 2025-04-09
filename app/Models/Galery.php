<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $table = 'galeries';
    protected $fillable = [
        'title',
        'caption',
        'image',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'image' => 'json'
    ];
}
