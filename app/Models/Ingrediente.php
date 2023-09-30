<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingrediente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =['name', 'descricao', 'calorias'];

    public function pratos(){
        return $this->hasManyThrough(Prato::class,Ingrediente::class,'id','id')->with('categoria');
    }
}
