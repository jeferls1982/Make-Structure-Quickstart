<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PratoHasIngredientes extends Model
{
    use HasFactory;

    protected $fillable = ['prato_id', 'ingrediente_id'];
}
