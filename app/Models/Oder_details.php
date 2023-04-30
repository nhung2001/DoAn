<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oder_details extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'order_details';

    protected $fillable = [
        'price',
        'quantity',
        'products_id',
        'orders_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function products()
    {
        return $this->belongsTo(products::class);
    }
    public function orders()
    {
        return $this->belongsTo(Orders::class);
    }
}
