<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    //venta a producto
    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }

    //venta a paquetes
    public function packages(){
        return $this->belongsToMany('App\Models\Package');
    }

    //muchos a uno de ventas a usuario
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //uno a muchos de ventas a pagos
    public function payments(){
        return $this->hasMany('App\Models\Payment');
    }
}
