<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oders extends Model
{
   public const STATUS_WAIT = 0;
   public const STATUS_DO = 1;
   public const STATUS_DONE = 2;

   public static $status = [
       self::STATUS_WAIT => 'Đang chờ xử lý',
       self::STATUS_DO => 'Đang giao hàng',
       self::STATUS_DONE => 'Giao hàng thành công',
   ];

   protected $fillable = [
       'status',
       'total',
   ];

   protected $dates = [
      'date',
      'created_at',
      'updated_at',
      'deleted_at'
   ];
}
