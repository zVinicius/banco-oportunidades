<?php

namespace App\Http\Controllers;

use App\NivelIngles;
use Illuminate\Http\Request;

class OportunidadesController extends Controller{
    public function Main(Request $request){     
        return View('banco-oportunidades.main', compact('niveisIngles'));
    }

    public function Insert(Request $request){
        $nome = $request->get('nome');
        $email = $request->get('email');
        $fone = $request->get('fone');
        $apresentacao = $request->get('apresentacao');
        $linkedIn = $request->get('linkedIn');
        $gitHub = $request->get('gitHub');
        $pretencaoSal = $request->get('pretencaoSalarial');
        $curriculo = $request->get('curriculo');        
    }
}

?>