<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'f_pago',
        'order_id',
    ];

    protected $dates = [
        'f_pago',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
