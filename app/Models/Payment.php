<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    //muchos a uno de pagos a ventas
    public function sale(){
        return $this->belongsTo('App\Models\Sale');
    }

    //uno a muchos de pagos a abonos
    public function terms(){
        return $this->hasMany('App\Models\Term');
    }
}
