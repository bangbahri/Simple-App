<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'food_id',
        'user_id',
        'quantity',
        'total',
        'status',
        'payment_url'
    ];
}
