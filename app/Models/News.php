<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    //hot
    public const HOT_YES = 1;
    public const HOT_NO = 0;

    public static $hot = [
        self::HOT_YES => 'Có',
        self::HOT_NO => 'Không',
    ];

    protected $fillable = [
        'name',
        'image',
        'description',
        'content',
        'hot',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
