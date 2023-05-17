<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
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
        'price',
        'author',
        'description',
        'quantity',
        'sub_categories_id',
        'hot',
        'discount'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function sub_categories()
    {
        return $this->belongsTo('App\Models\Sub_categories');
    }
    public function favorite()
    {
        return $this->hasMany(favorite::class);
    }
    public function quantity()
    {
        return $this->quantity;
    }
}
