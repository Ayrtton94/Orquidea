<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nombres',
        'apellidos',
        'tipo_doc',
        'number_doc',
        'direccion',
        'departamento_id',
        'provincia_id',
        'distrito_id',
        'telefono',
        'correo'
        ];
}
