<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes;

    //role
    public const ROLE_CUSTOMER = 0;
    public const ROLE_STAFF = 1;
    public const ROLE_ADMIN_ROOT = 2;

    public static $roles = [
        self::ROLE_CUSTOMER => 'Khách hàng',
        self::ROLE_STAFF => 'Nhân viên',
        self::ROLE_ADMIN_ROOT => 'Người quản trị',
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'address',
        'role',
    ];

    protected $hidden = [
        'password',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}

