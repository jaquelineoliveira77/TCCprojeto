@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="{{route("psicologa.show")}}" method="GET">
        @csrf

      <h1>Agendamentos Pendentes</h1> <br>

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
              {{-- <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a> --}}
              <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
              <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
              <a class="nav-item nav-link active" id="nav-agendamentoDia-tab" data-toggle="tab" href="{{route("psicologa.agendDia")}}" role="tab" aria-controls="nav-agendamentoDia" aria-selected="false">Agendamentos do Dia</a>
              <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="{{route("psicologa.histor")}}" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
            </div>
          </nav>

          <br>
            {{-- <div class="col-sm-5"> --}}
                @foreach ($solicitacaos as $solicitacao)
                
                <br><br>
                <p>Nome do Usuário: {{ $solicitacao->user_name }}</p>
                <p>Curso: {{ $solicitacao->curso }}</p>
                <p>Fase: {{ $solicitacao->fase }}</p>
                <p>Comentário: {{ $solicitacao->comentario }}</p>
                <p>Atendimento em Grupo: {{ $solicitacao->atdGrupo }}</p>
                <p>Data e Horário: {{ $solicitacao->periodo}}</p>
                <!-- Adicione outros campos das tabelas conforme necessário -->
                {{-- <p>Data e Horário: {{ $data_solicitacao->periodo}}</p> --}}

                {{-- <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a> --}}
                <button type="submit" name="confirmacao" value="confirmado" class="btn btn-success">Confirmar</button>
                <button type="button" class="btn btn-danger">Descartar</button>
                <button type="button" class="btn btn-info">Solicitar Nova Data</button>

                @endforeach
                
                <br><br>

                <!-- Página de confirmação -->
                {{-- @if(isset($confirmacao) && $confirmacao === 'confirmado')
                <p>Confirmação recebida com sucesso!</p>
                @else
                <p>Nenhuma confirmação recebida.</p>
                @endif --}}


            {{-- @foreach ($data_solicitacaos as $data_solicitacao)
           
            <!-- Adicione outros campos das tabelas conforme necessário -->

            @endforeach --}}



          {{-- <div class="my-1">
            <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success">Confirmar</button>
            <button type="button" class="btn btn-danger">Descartar</button>
            <button type="button" class="btn btn-info">Solicitar Nova Data</button>
          </div> --}}



          </form>
        </div>

@endsection
