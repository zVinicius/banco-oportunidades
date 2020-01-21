<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model{
    protected $filable = [
        'nome',
        'email',
        'fone',
        'apresentacao',
        'linkedIn',
        'gitHub',
        'ingles',
        'pretencaoSalarial'
    ];
    
    

    



}