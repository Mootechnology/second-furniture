<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id',
        'price',
    ] ;

    static public function DeleteRecod($product_id)
    {
        self::where('product_id', $product_id)
->delete();
  }
}
