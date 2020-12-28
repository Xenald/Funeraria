<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // prouctos a venta
    public function sales(){
        return $this->belongsToMany('App\Models\Sale');
    }

    // producto a paquetes
    public function packages(){
        return $this->belongsToMany('App\Models\Package');
    }
}
