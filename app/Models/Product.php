<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Order;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'precio',
        'stock',
        'status',
    ];


    public function carts(){
        return $this->belongsToMany(Cart::class)->withPivot('cantidad');
    }

    public function orders(){
        return $this->belongsToMany(Order::class)->withPivot('cantidad');
    }
}
