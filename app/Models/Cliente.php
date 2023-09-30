<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','fone', 'email', 'cpf_cnpj','data_nascimento'];

    public function reservas(){
        return $this->hasMany(Reserva::class,'id')->with('mesa');
    }
}
