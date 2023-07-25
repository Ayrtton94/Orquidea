<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::Create([
            'name'=>'Tableta orgánica',
            'date'=>'2023-07-25',
            'description'=>'Tableta orgánica'
        ]);
        Category::Create([
            'name'=>'Tableta clásica',
            'date'=>'2023-07-25',
            'description'=>'Tableta clásica'
        ]);
        Category::Create([
            'name'=>'Coberturas',
            'date'=>'2023-07-25',
            'description'=>'Coberturas'
        ]);
        Category::Create([
            'name'=>'Chocolate para taza',
            'date'=>'2023-07-25',
            'description'=>'Chocolate para taza'
        ]);
        Category::Create([
            'name'=>'Chocotejas',
            'date'=>'2023-07-25',
            'description'=>'Chocotejas'
        ]);
        Category::Create([
            'name'=>'Mini orquídea',
            'date'=>'2023-07-25',
            'description'=>'Mini orquídea'
        ]);
        Category::Create([
            'name'=>'Bombones rellenos',
            'date'=>'2023-07-25',
            'description'=>'Bombones rellenos'
        ]);
        
    }
}
