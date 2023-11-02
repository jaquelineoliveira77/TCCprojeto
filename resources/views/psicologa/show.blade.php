@extends('layouts.app')

@section('content')


    <div class="container">
      <form action="{{route("psicologa.show")}}" method="GET">
      {{-- <form action="{{ route('psicologa.confirmarSolicitacao', ['id' => $solicitacao->id]) }}" method="POST">  --}}

        @csrf
        

      <h1>Solicitações Pendentes</h1> <br>

                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
                    {{-- <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a> --}}
                    <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
                    <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
                    <a class="nav-item nav-link active" id="nav-agendamentoDia-tab" data-toggle="tab" href="{{route("psicologa.agendDia")}}" role="tab" aria-controls="nav-agendamentoDia" aria-selected="false">Agendamentos do Dia</a>
                    <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("providencia.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Providências Cadastradas</a>
                    <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("motivo.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Motivos Cadastradas</a>
                    <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="{{route("psicologa.histor")}}" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
                  </div>
                </nav>

          <br>
            
                @foreach ($solicitacaos as $solicitacao)        
                
                
                <br><br>
                <p>Nome do Usuário: {{ $solicitacao->user_name }}</p>
                <p>Curso: {{ $solicitacao->curso }}</p>
                <p>Fase: {{ $solicitacao->fase }}</p>
                <p>Comentário: {{ $solicitacao->comentario }}</p>
                <p>Atendimento em Grupo: {{ $solicitacao->atdGrupo }}</p>
                {{-- <input type="hidden" name="solicitacao_id" value="{{ $solicitacao->id }}"> --}}
              
                <!-- Adicione outros campos das tabelas conforme necessário -->
             
                {{-- <button type="submit" name="action" value="confirmar_{{ $solicitacao->id }}" class="btn btn-success">Confirmar</button> --}}
                <button type="submit" name="" value="" class="btn btn-success">Confirmar</button>
                <button type="button" class="btn btn-danger">Descartar</button>
                <button type="button" class="btn btn-info">Solicitar Nova Data</button>

                @endforeach
                
                <br><br>

      </form>
       

@endsection
