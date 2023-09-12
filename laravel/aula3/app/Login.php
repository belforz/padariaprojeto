<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table ="usuario";

    protected $fillable = ['idUsuario','nomeusuario','senha'];
    
    public $timestamps = false;
}
