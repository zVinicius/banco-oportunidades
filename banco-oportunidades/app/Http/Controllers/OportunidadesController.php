<?php

namespace App\Http\Controllers;

use App\Candidato;
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
        $nivelIngles = ConverteNivelIngles($request->input('ingles'));
        $pretencaoSal = $request->get('pretencaoSalarial');

        Candidato::create([
            'nome' => $nome,
            'email' => $email,
            'fone'=> $fone,
            'apresentacao'=>$apresentacao,
            'linkedIn' => $linkedIn,
            'gitHub' => $gitHub,
            'ingles' => $nivelIngles,
            'pretencaoSalarial' => number_format($pretencaoSal, 2),
            'curriculo' => $request->file('curriculo')->storeAs('documentos', "CV-$nome-".date("d_m_Y_hisa").'.pdf')
            ]);
        

            $request->session()->flash('mensagem', "Candidato {$nome} cadastrado com sucesso!");
            return redirect()->route('main');
        
        
    }

    
}

function ConverteNivelIngles($codigo){
    switch($codigo){
        case 1:
            return "Básico";
            break;
        case 2:
            return "Intermediário";
            break;
        case 3:
            return "Avançado";
            break;
    }
}

?>