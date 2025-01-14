<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    Use HasFactory;
    protected $fillable = [
        'name',
        'stock',
        'price'
    ];
}
