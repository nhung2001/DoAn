<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;
    protected $table = 'favorite';
    protected $fillable = [
        'product_id',
        'user_id'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
