@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="{{route("motivo.show")}}" method="GET">
        @csrf

        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#confirmacao-modal').modal();
            });
        </script> --}}
        

      <h1>Servidores Cadastrados</h1> <br>

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
              <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a>
              <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
              <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
              <a class="nav-item nav-link active" id="nav-agendamentoDia-tab" data-toggle="tab" href="{{route("psicologa.agendDia")}}" role="tab" aria-controls="nav-agendamentoDia" aria-selected="false">Agendamentos do Dia</a>
              <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("providencia.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Providências Cadastradas</a>
              <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("motivo.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Motivos Cadastrados</a>
              <a class="nav-item nav-link active" id="nav-inspecaoAtendimento-tab" data-toggle="tab" href="{{route("psicologaCadAtd.show")}}" role="tab" aria-controls="nav-inspecaoAtendimento" aria-selected="false">Inspeção de Atendimentos</a>
              <a class="nav-item nav-link active" id="nav-servidors-tab" data-toggle="tab" href="{{route("psicologaCad.show")}}" role="tab" aria-controls="nav-servidors" aria-selected="false">Servidores Cadastrados</a>
              <a class="nav-item nav-link active" id="nav-atendimentosCad-tab" data-toggle="tab" href="{{route("psicologaCadAtd.create")}}" role="tab" aria-controls="nav-atendimentosCad" aria-selected="false">Cadastrar Atendimentos</a>
            </div>
          </nav>

          <br>
            {{-- <div class="col-sm-5"> --}}
                @foreach ($servidors as $servidor)       
                <p>Nome do Servidor: {{ $servidor->admin_name }}</p>
                <p>Setor: {{ $servidor->setor }}</p>
                <p>Siape: {{ $servidor->siape }}</p>
                <p>Telefone: {{ $servidor->telefone }}</p>
            
                @endforeach

                <br>
                <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a>
                
              
@endsection
