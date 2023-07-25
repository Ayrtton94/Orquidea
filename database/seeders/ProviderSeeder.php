<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provider::Create([
            'fecha_creacion'=> '2023-07-25 10:26:30',
            'razon_social'=> 'Prueba01',
            'ruc'=> '1020404004801',
            'rubro'=> 'ventas',
            'pagina_web'=> 'prueba.com',
            'direccion'=> 'jr. prueba',
            'departamento_id'=> '15',
            'provincia_id'=> '135',
            'distrito_id'=> '1355',
            'nombres'=> 'Prueba01',
            'apellidos'=> 'Prueba02',
            'tipo_doc'=> 'DNI',
            'number_doc'=> '75618499',
            'genero'=> 'Hombre',
            'telefono'=> '960540888',
            'correo'=> 'admin@gmail.com'
        ]);
    }
}
