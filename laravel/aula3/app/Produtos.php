<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produto';

    protected $fillable = ['idProduto','Pnome','Descricao','quantidade','valor_inicial'];
    
    public $timestamps = false;
}
