<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClassificationtwo extends Model
{
    use HasFactory;

    protected $fillable = [
        "classificationone_code",
        "code",
        "name",
        "price",
        "storage",
        "sku",
        "product_code",
    ];
}
