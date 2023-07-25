<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =['name'
    ,'sku'
    ,'quantity'
    ,'price'
    ,'status'
    ,'lots_id'
    ,'category_id'
    ,'provider_id'];

    public function lots()
    {
        return $this->hasMany(Lot::class);
    }
}
