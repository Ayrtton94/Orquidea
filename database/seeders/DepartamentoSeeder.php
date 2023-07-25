<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamento::Create([
            'name'=>'AMAZONAS'
        ]);
        Departamento::Create([
            'name'=>'ANCASH'
        ]);
        Departamento::Create([
            'name'=>'APURIMAC'
        ]);
        Departamento::Create([
            'name'=>'AREQUIPA'
        ]);
        Departamento::Create([
            'name'=>'AYACUCHO'
        ]);
        Departamento::Create([
            'name'=>'CAJAMARCA'
        ]);
        Departamento::Create([
            'name'=>'CALLO'
        ]);
        Departamento::Create([
            'name'=>'CUSCO'
        ]);
        Departamento::Create([
            'name'=>'HUANCAVELICA'
        ]);
        Departamento::Create([
            'name'=>'HUANUCO'
        ]);
        Departamento::Create([
            'name'=>'ICA'
        ]);
        Departamento::Create([
            'name'=>'JUNIN'
        ]);
        Departamento::Create([
            'name'=>'LA LIBERTAD'
        ]);
        Departamento::Create([
            'name'=>'LAMBAYEQUE'
        ]);
        Departamento::Create([
            'name'=>'LIMA'
        ]);
        Departamento::Create([
            'name'=>'LORETO'
        ]);
        Departamento::Create([
            'name'=>'MADRE DE DIOS'
        ]);
        Departamento::Create([
            'name'=>'MOQUEGUA'
        ]);
        Departamento::Create([
            'name'=>'PASCO'
        ]);
        Departamento::Create([
            'name'=>'PIURA'
        ]);
        Departamento::Create([
            'name'=>'PUNO'
        ]);
        Departamento::Create([
            'name'=>'SAN MARTIN'
        ]);
        Departamento::Create([
            'name'=>'TACNA'
        ]);
        Departamento::Create([
            'name'=>'TUMBES'
        ]);
        Departamento::Create([
            'name'=>'UCAYALI'
        ]);
    }
}
