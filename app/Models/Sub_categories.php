<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sub_categories extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'categories_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function categories()
    {
        return $this->belongsTo('App\Models\Categories');
    }

    // public function products()
    // {
    //     return $this->hasMany(Products::class);
    // }
}
