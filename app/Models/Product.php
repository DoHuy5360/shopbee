<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "user_code",
        "name",
        "description",
        "category",
        "brand",
        "origin",
        "weight",
        "price",
        "storage",
        "weight_packed",
        "r_packed",
        "d_packed",
        "c_packed",
        "pre_order",
        "status",
        "sku_code",
        "classificationone",
        "classificationtwo",
        "hidden",
    ];
}
