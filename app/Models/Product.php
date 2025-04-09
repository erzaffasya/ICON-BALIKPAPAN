<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'thumbnail',
        'desc',
        'price',
        'status',
        'meta',
        'name',
        'type',
        'is_best_deal'
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_best_deal' => 'boolean',
        'meta' => 'json'
    ];
}
