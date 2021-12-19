<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

  
    protected $fillable = [
        'name',
        'email',
        'password',
        //'admin_since'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'admin_since',
    ];


    public function orders(){
        return $this->hasMany(Order::class, 'id_cliente');
    }
}
