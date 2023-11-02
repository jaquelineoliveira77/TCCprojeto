@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Atendimentos do Dia</h1> <br>

         {{-- <a class="btn btn-secondary" href="{{route("aluno.index")}}">Solicitar Atendimento</a> <br> <br>  --}}


         <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("aluno.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
            {{-- <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("alunoCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro</a> --}}
            <a class="nav-item nav-link active " id="nav-atendimento-tab" data-toggle="tab" href="{{route("aluno.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
            <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("aluno.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Solicitados</a>
            <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="{{route("aluno.histor")}}" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
          </div>
        </nav>

          <br> <br>

          <h2>IFSC Lages</h2>
         

@endsection
