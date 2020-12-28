<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    //muchos a uno de abonos a pagos
    public function payment(){
        return $this->belongsTo('App\Models\Payment');
    }
}
