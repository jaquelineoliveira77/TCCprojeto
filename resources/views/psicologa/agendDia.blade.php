@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Atendimentos do Dia</h1> <br>

         {{-- <a class="btn btn-secondary" href="{{route("aluno.index")}}">Solicitar Atendimento</a> <br> <br>  --}}


          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
              <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a>
              <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
              <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
              <a class="nav-item nav-link active" id="nav-agendamentoDia-tab" data-toggle="tab" href="{{route("psicologa.agendDia")}}" role="tab" aria-controls="nav-agendamentoDia" aria-selected="false">Agendamentos do Dia</a>
              <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("providencia.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Providências Cadastradas</a>             
              <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("motivo.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Motivos Cadastradas</a>
              <a class="nav-item nav-link active" id="nav-inspecaoAtendimento-tab" data-toggle="tab" href="{{route("psicologaCadAtd.show")}}" role="tab" aria-controls="nav-inspecaoAtendimento" aria-selected="false">Inspeção de Atendimentos</a>
              <a class="nav-item nav-link active" id="nav-servidors-tab" data-toggle="tab" href="{{route("psicologaCad.show")}}" role="tab" aria-controls="nav-servidors" aria-selected="false">Servidores Cadastrados</a>
              <a class="nav-item nav-link active" id="nav-atendimentosCad-tab" data-toggle="tab" href="{{route("psicologaCadAtd.create")}}" role="tab" aria-controls="nav-atendimentosCad" aria-selected="false">Cadastrar Atendimentos</a>
            </div>
          </nav>

          <br> <br>

          <h2>IFSC Lages</h2>
         

@endsection
