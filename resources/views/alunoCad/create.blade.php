
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("alunoCad.store")}}" method="POST">
            @csrf

            <h1>Cadastro de Aluno</h1> <br>


            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("aluno.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
                <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("alunoCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro</a>
                {{-- <a class="nav-item nav-link active " id="nav-atendimento-tab" data-toggle="tab" href="{{route("aluno.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
                <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="#nav-pendente" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
                <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a> --}}
                </div>
            </nav>

            <br>

            {{-- <div class="col-sm-5">
                <label for="id-input-idUser" class="form-label">ID User</label>
                <input type="text" class="form-control" id="id-input-idUser" aria-describedby="idHelp" placeholder="#" disabled> 
                <div id="idUser" class="form-text">Não será necessário cadastrar um id</div>
            </div> --}}

            <div class="col-sm-5">
                <label for="id-input-curso" class="form-label">Curso</label>
                <input name="curso" type="text" class="form-control" id="id-input-curso" placeholder="Digite o curso" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-fase" class="form-label">Fase</label>
                <input name="fase" type="number" class="form-control" id="id-input-fase" placeholder="Digite a fase" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-matricula" class="form-label">Matricula</label>
                <input name="matricula" type="number" class="form-control" id="id-input-matricula" placeholder="Digite a matrícula" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-telefone" class="form-label">Telefone</label>
                <input name="telefone" type="text" class="form-control" id="id-input-telefone" placeholder="Digite o telefone" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-responsavel" class="form-label">Responsável</label>
                <input name="responsavel" type="text" class="form-control" id="id-input-responsavel" placeholder="Digite o nome do responsável" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-telefone-responsavel" class="form-label">Telefone do responsável</label>
                <input name="telefone" type="text" class="form-control" id="id-input-telefone_responsavel" placeholder="Digite o telefone do responsável" required>
            </div>
            
            <div class="col-sm-5">
                <label for="id-input-deficiencia" class="form-label">Deficiencia</label>
                <input name="deficiencia" type="text" class="form-control" id="id-input-deficiencia" placeholder="Digite a deficiencia caso tenha" required>
            </div>
             
            <div class="my-1">
                <a href="{{route("aluno.index")}}" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="submit" class="btn btn-secondary">Limpar</button>
            </div>

        </form>
    </div>

  @endsection