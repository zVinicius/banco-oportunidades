<?php

namespace App;

class NivelIngles{
    public $Codigo;
    public $Descricao;

    function __construct($codigo, $descricao)
    {
        $this->Codigo = $codigo;
        $this->Descricao = $descricao;
    }
}