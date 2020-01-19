<?php

namespace App\Http\Controllers;

use App\NivelIngles;
use Illuminate\Http\Request;

class OportunidadesController extends Controller{
    public function Main(Request $request){     
        // $nivelIngles = [
        //     new NivelIngles(1, 'Basico'),
        //     new NivelIngles(1, 'Intermediário'),
        //     new NivelIngles(1, 'Avançado')
        // ];  

        return View('banco-oportunidades.main', compact('niveisIngles'));

    }
}

?>