<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'status',
        'total',
        'users_id',
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function users()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User');
    }
    public function scopeCurrentUserOrders($query)
    {
        return $query->where('users_id', auth()->id());
    }
    public function products()
    {
        return $this->belongsTo(products::class);
    }
    public function orderDetail(){
        return $this->hasMany(Oder_details::class);
    }
}
