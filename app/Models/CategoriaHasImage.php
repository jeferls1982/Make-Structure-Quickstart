<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaHasImage extends Model
{
    use HasFactory;

    protected $fillable = ['image_id', 'categoria_id'];
}
