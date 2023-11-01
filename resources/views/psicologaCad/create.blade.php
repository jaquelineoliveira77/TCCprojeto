
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("psicologaCad.store")}}" method="POST">
            @csrf

            <h1>Cadastro de Servidor</h1> <br>


            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
                  <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a>
                  {{-- <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
                  <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
                  <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
                  <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Agendamentos do Dia</a> --}}
                </div>
            </nav>

            <br>

            {{-- <div class="col-sm-5">
                <label for="id-input-idUser" class="form-label">ID User</label>
                <input type="text" class="form-control" id="id-input-idUser" aria-describedby="idHelp" placeholder="#" disabled> 
                <div id="idUser" class="form-text">Não será necessário cadastrar um id</div>
            </div> --}}

            <div class="col-sm-5">
                <label for="id-input-setor" class="form-label">Setor</label>
                <input name="setor" type="text" class="form-control" id="id-input-setor" placeholder="Digite o setor" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-siape" class="form-label">Siape</label>
                <input name="siape" type="number" class="form-control" id="id-input-siape" placeholder="Digite o siape" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-telefone" class="form-label">Telefone</label>
                <input name="telefone" type="number" class="form-control" id="id-input-telefone" placeholder="Digite o telefone" required>
            </div> 

            <div class="my-1">
                <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="submit" class="btn btn-secondary">Limpar</button>
            </div>

        </form>
    </div>

  @endsection