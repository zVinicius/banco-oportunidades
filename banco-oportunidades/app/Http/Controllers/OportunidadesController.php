<?php

namespace App\Http\Controllers;

use App\NivelIngles;
use Illuminate\Http\Request;

class OportunidadesController extends Controller{
    public function Main(Request $request){     
        return View('banco-oportunidades.main', compact('niveisIngles'));
    }

    public function Insert(Request $request){

        $request->validate([
            'nome'=>'required',
            'email'=>'required',
            'curriculo'=>'required|mimes:pdf,doc'
        ]);
        
        $nome = $request->get('nome');
        $email = $request->get('email');
        $fone = $request->get('fone');
        $apresentacao = $request->get('apresentacao');
        $linkedIn = $request->get('linkedIn');
        $gitHub = $request->get('gitHub');
        $nivelIngles = $request->input('ingles');
        $pretencaoSal = $request->get('pretencaoSalarial');
        

        echo $request->file('curriculo');
        
        
    }
}

?>