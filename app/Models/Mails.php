<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mails extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'content',
    ];

    protected $dates = [
        'created_at',
    ];
}
