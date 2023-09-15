<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produto';

    protected $fillable = ['idProduto','Pnome','Descricao','Quantidade','Valor_Inicial','imagem'];
    
    public $timestamps = false;
}
