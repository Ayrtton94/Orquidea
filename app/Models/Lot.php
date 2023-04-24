<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
     protected $fillable =['product_id','lot_number','quantity','expiration_date'];

     public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
