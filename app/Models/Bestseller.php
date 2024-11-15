<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestseller extends Model
{
    use HasFactory;
    protected $fillable = [
        'fruits',
        'sales',
        'price'
    ];
}
