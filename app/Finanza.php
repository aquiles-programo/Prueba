<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finanza extends Model
{
    protected $fillable = ['monto', 'tipo_ingreso'];
}
