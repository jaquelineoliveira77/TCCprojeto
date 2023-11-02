@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="{{route("psicologaCadAtd.show")}}" method="GET">
        @csrf

        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#confirmacao-modal').modal();
            });
        </script> --}}
        

      <h1>Inspeção de Atendimento Realizado</h1> <br>

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
              {{-- <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a> --}}
              <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
              <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
              <a class="nav-item nav-link active" id="nav-agendamentoDia-tab" data-toggle="tab" href="{{route("psicologa.agendDia")}}" role="tab" aria-controls="nav-agendamentoDia" aria-selected="false">Agendamentos do Dia</a>
              <a class="nav-item nav-link active" id="nav-inspecaoAtendimento-tab" data-toggle="tab" href="{{route("psicologaCadAtd.show")}}" role="tab" aria-controls="nav-inspecaoAtendimento" aria-selected="false">Inspeção de Atendimentos</a>
              <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="{{route("psicologa.histor")}}" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
            </div>
          </nav>

          <br>
            {{-- <div class="col-sm-5"> --}}
                @foreach ($atendimentos as $atendimento)
                
                <br>
                <p>Usuário: {{ $atendimento->user_name }}</p>
                <p>Curso: {{ $atendimento->curso }}</p>
                <p>Fase: {{ $atendimento->fase }}</p>
                <p>Matricula: {{ $atendimento->matricula }}</p>
                <p>Telefone: {{ $atendimento->telefone }}</p>
                <p>Comentário: {{ $atendimento->comentario }}</p>
                <p>Providencias: {{ $atendimento->providencia_descricao }}</p>
                <p>Motivos: {{ $atendimento->motivo_descricao }}</p>
                <p>Intervenção: {{ $atendimento->intervencao}}</p>
                <p>Observação: {{ $atendimento->observacoes}}</p> 
                <!-- Adicione outros campos das tabelas conforme necessário -->
                

                {{-- <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a> --}}
                <button type="submit" name="" value="" class="btn btn-success">Visualizar</button>
                <button type="button" class="btn btn-primary">Voltar</button>

                @endforeach
                
                <br><br>

                {{-- <div id="confirmacao-modal" class="modal">
                  <div class="modal-content">
                      <h2>Confirmação de Agendamento</h2>
                      <p>Tem certeza de que deseja agendar?</p>
                  </div>
                  <div class="modal-footer">
                      <a href="{{ route('agendamentoConcluido') }}" class="btn">Confirmar</a>
                      <a href="#!" class="btn modal-close">Cancelar</a>
                  </div>
              </div> --}}

       

@endsection
