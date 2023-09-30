<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prato extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'price','categoria_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id');
    }

    public function ingredientes(){
        return $this->hasManyThrough(Ingrediente::class,Prato::class,'id','id');
    }

    public function images(){
        return $this->hasManyThrough(Image::class,Prato::class,'id','id');
    }
}
