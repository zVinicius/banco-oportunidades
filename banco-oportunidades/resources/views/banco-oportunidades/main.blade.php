@extends('layout')

@section('conteudo')    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <form action="/oportunidade/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group" >
                <label >Informações Pessoais</label>
                <input class="form-control mt-2" type="text" placeholder="Nome Completo" name="nome">
                <input class="form-control mt-2" type="text" placeholder="Email" name="email">
                <input class="form-control mt-2" type="text" placeholder="Telefone (com ddd)" name="fone">
            </div>

            <div class="form-group">
                <label for="carta-apresentacao">Carte de Apresentação</label>
                <textarea class="form-control" id="carta-apresentacao" name="apresentacao" rows="3"></textarea>
            </div>

            <div class="form-group" >
                <label >Últimas Perguntas</label>
                <input class="form-control mt-2" type="text" placeholder="url do seu linkedIn" name="linkedIn">
                <input class="form-control mt-2" type="text" placeholder="url do seu github" name="gitHub">
                <div class="mt-2">
                    <select class="form-control" name="ingles" id="ingles" >
                        <option value="0" selected disabled>Nível de Inglês</option>
                        <option value="1" >Básico</option>                        
                        <option value="2" >Intermediário</option>                        
                        <option value="3" >Avançado</option>                        
                    </select>                
                </div>                
                <input class="form-control mt-2" type="text" placeholder="Pretenção Salarial" name="pretencaoSalarial">
            </div>

            <div class="form-group">
                <label >Anexe seu currículo em PDF ou DOC</label>
                <input type="file" class="form-control" name="curriculo">                
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
            </div>
        </form>
    </div>
@endsection

