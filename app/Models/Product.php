<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Image;


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
        return $this->morphedByMany(Cart::class, 'productable')->withPivot('cantidad'); //Relación Polimórfica
    }

    public function orders(){
        return $this->morphedByMany(Order::class, 'productable')->withPivot('cantidad');
    }

    public function images(){
        return $this->morphMany(Image::class, 'conimagen');
    }

    //Filtrado de productos disponibles en el inicio
    public function scopeDisponible($query){
        $query->where('status', 'Disponible');
    }
}
