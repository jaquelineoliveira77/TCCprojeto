@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="{{route("aluno.show")}}" method="POST">
        @csrf

      <h1>Agendamentos Solicitados</h1> <br>

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("aluno.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
              {{-- <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("alunoCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro</a> --}}
              <a class="nav-item nav-link active " id="nav-atendimento-tab" data-toggle="tab" href="{{route("aluno.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
              <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("aluno.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Solicitados</a>
              <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="{{route("aluno.histor")}}" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
            </div>
          </nav>

          <br>
            {{-- <div class="col-sm-5"> --}}
                {{-- @foreach ($solicitacaos as $solicitacao)
                
                <br><br>
                <p>Nome do Usuário: {{ $solicitacao->user_name }}</p>
                <p>Curso: {{ $solicitacao->curso }}</p>
                <p>Fase: {{ $solicitacao->fase }}</p>
                <p>Comentário: {{ $solicitacao->comentario }}</p>
                <p>Atendimento em Grupo: {{ $solicitacao->atdGrupo }}</p> --}}
                {{-- <p>Data e Horário: {{ $solicitacao->periodo}}</p> --}}
                <!-- Adicione outros campos das tabelas conforme necessário -->

                {{-- <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a> --}}
                {{-- <button type="submit" class="btn btn-success">Confirmar</button>
                <button type="button" class="btn btn-danger">Descartar</button>
                <button type="button" class="btn btn-info">Solicitar Nova Data</button>

                @endforeach
                
                <br><br> --}}

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
