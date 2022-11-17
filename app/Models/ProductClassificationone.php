<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClassificationone extends Model
{
    use HasFactory;

    protected $fillable = [
        "product_code",
        "code",
        "name",
        "path",
    ];
}
