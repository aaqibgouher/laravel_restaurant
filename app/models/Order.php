<?php

namespace App\models;

use App\models\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
