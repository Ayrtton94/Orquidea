<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'fecha_creacion',
        'razon_social',
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
        'genero',
        'telefono',
        'correo',
        'status'];
    
}
