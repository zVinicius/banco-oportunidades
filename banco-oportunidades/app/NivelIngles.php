<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelIngles extends Model{
    public $Codigo;
    public $Descricao;

    function __construct($codigo, $descricao)
    {
        $this->Codigo = $codigo;
        $this->Descricao = $descricao;
    }
}