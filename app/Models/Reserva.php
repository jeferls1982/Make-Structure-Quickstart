<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['periodo','data','cadeiras','pcd','qtd_pcd','observacao','cliente_id','mesa_id'];

    public function cliente(){
        return $this->hasOne(Cliente::class,'id');
    }

    public function mesa(){
        return $this->hasOne(Mesa::class,'id');
    }
}
