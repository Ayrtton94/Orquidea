<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'date',
        'razon_social',
        'status',
        'ruc',
        'rubro',
        'pagina_web',
        'direccion',
        'departamento_id',
        'provincia_id',
        'distrito_id',
        'nombres',
        'apellidos',
        'tipo_doc',
        'number_doc',
        'telefono',
        'correo'
    ];
}
