
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("motivo.store")}}" method="POST">
            @csrf

            <h1>Cadastro de Motivos</h1> <br>


            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
                  {{-- <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a> --}}
                  {{-- <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
                  <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
                  <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
                  <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Agendamentos do Dia</a> --}}
                </div>
            </nav>

            <br>

            
            <div class="col-sm-5">
                <label for="id-input-descricao" class="form-label">Motivos</label>
                <input name="descricao" type="text" class="form-control" id="id-input-descricao" placeholder="Digite a descrição do motivo" required>
            </div>


            <div class="my-1">
                <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>

        </form>
    </div>

  @endsection