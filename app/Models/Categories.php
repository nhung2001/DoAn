<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at_at'
    ];
    public function subCategories()
    {
        return $this->hasMany(Sub_categories::class);
    }
    public function products(){
        return $this->hasManyThrough(products::class, Sub_categories::class);
    }
}
