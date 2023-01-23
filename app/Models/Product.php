<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Attribute table yg hanya dapat diisi oleh sistem (semisal auto increment)
    protected $guarded = ['id']; 
}
