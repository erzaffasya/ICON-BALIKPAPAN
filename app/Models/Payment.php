<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = ['name', 'is_published'];
    protected $casts = [
        'is_published' => 'boolean'
    ];

    public function detail(): HasOne
    {
        return $this->hasOne(PaymentDetail::class, 'payment_id', 'id');
    }
}
