<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    //paquetes a venta
    public function sales(){
        return $this->belongsToMany('App\Models\Sale');
    }

    //paquetes a productos
    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }

}
