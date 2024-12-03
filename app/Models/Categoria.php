<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable=[
        'nome'
    ];

    public function getNome(){
        return $this->attributes['nome'];
    }

    public function setNome($novoNome){
        $this->attributes['nome'] = $novoNome;
    }
}
