<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Lot;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lot::Create([
            'lot_number'=>'lote01',
            'expiration_date'=>'2023-07-25'
        ]);

        Product::Create([
            'name'=>'Dark chocolate'
            ,'sku'=>'001'
            ,'quantity'=>'1'
            ,'price'=>'17.50'
            ,'lots_id'=>'1'
            ,'category_id'=>'1'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Dark chocolate con Kiwicha'
            ,'sku'=>'002'
            ,'quantity'=>'1'
            ,'price'=>'15.60'
            ,'lots_id'=>'1'
            ,'category_id'=>'1'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Dark chocolate con Cacaonibs'
            ,'sku'=>'003'
            ,'quantity'=>'1'
            ,'price'=>'15.20'
            ,'lots_id'=>'1'
            ,'category_id'=>'1'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Dark chocolate Mik'
            ,'sku'=>'004'
            ,'quantity'=>'1'
            ,'price'=>'18.30'
            ,'lots_id'=>'1'
            ,'category_id'=>'1'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Dark chocolate con Quinoa'
            ,'sku'=>'005'
            ,'quantity'=>'1'
            ,'price'=>'18.30'
            ,'lots_id'=>'1'
            ,'category_id'=>'1'
            ,'provider_id'=>'1'
        ]);


        Product::Create([
            'name'=>'Coco'
            ,'sku'=>'006'
            ,'quantity'=>'1'
            ,'price'=>'19.50'
            ,'lots_id'=>'1'
            ,'category_id'=>'2'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Moka'
            ,'sku'=>'007'
            ,'quantity'=>'1'
            ,'price'=>'15.60'
            ,'lots_id'=>'1'
            ,'category_id'=>'2'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Leche'
            ,'sku'=>'008'
            ,'quantity'=>'1'
            ,'price'=>'15.60'
            ,'lots_id'=>'1'
            ,'category_id'=>'2'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Kiwicha'
            ,'sku'=>'009'
            ,'quantity'=>'1'
            ,'price'=>'15.90'
            ,'lots_id'=>'1'
            ,'category_id'=>'2'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Pecanas'
            ,'sku'=>'010'
            ,'quantity'=>'1'
            ,'price'=>'15.90'
            ,'lots_id'=>'1'
            ,'category_id'=>'2'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Nueces'
            ,'sku'=>'011'
            ,'quantity'=>'1'
            ,'price'=>'15.90'
            ,'lots_id'=>'1'
            ,'category_id'=>'2'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Bitter'
            ,'sku'=>'012'
            ,'quantity'=>'1'
            ,'price'=>'15.60'
            ,'lots_id'=>'1'
            ,'category_id'=>'2'
            ,'provider_id'=>'1'
        ]);


        Product::Create([
            'name'=>'Chocolate con leche'
            ,'sku'=>'013'
            ,'quantity'=>'1'
            ,'price'=>'1'
            ,'lots_id'=>'1'
            ,'category_id'=>'3'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Dar chocolate'
            ,'sku'=>'014'
            ,'quantity'=>'1'
            ,'price'=>'1'
            ,'lots_id'=>'1'
            ,'category_id'=>'3'
            ,'provider_id'=>'1'
        ]);

        Product::Create([
            'name'=>'Cacao'
            ,'sku'=>'015'
            ,'quantity'=>'1'
            ,'price'=>'1'
            ,'lots_id'=>'1'
            ,'category_id'=>'4'
            ,'provider_id'=>'1'
        ]);


        Product::Create([
            'name'=>'Pecanas'
            ,'sku'=>'016'
            ,'quantity'=>'1'
            ,'price'=>'1'
            ,'lots_id'=>'1'
            ,'category_id'=>'5'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'De maracuyá'
            ,'sku'=>'017'
            ,'quantity'=>'1'
            ,'price'=>'1'
            ,'lots_id'=>'1'
            ,'category_id'=>'5'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'De pasas'
            ,'sku'=>'018'
            ,'quantity'=>'1'
            ,'price'=>'1'
            ,'lots_id'=>'1'
            ,'category_id'=>'5'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'De pecanas'
            ,'sku'=>'019'
            ,'quantity'=>'1'
            ,'price'=>'1'
            ,'lots_id'=>'1'
            ,'category_id'=>'5'
            ,'provider_id'=>'1'
        ]);


        Product::Create([
            'name'=>'Chocolate'
            ,'sku'=>'020'
            ,'quantity'=>'1'
            ,'price'=>'42.90'
            ,'lots_id'=>'1'
            ,'category_id'=>'6'
            ,'provider_id'=>'1'
        ]);
        Product::Create([
            'name'=>'Cacao / sabores mixtos'
            ,'sku'=>'021'
            ,'quantity'=>'1'
            ,'price'=>'31.90'
            ,'lots_id'=>'1'
            ,'category_id'=>'7'
            ,'provider_id'=>'1'
        ]);


    }
}
