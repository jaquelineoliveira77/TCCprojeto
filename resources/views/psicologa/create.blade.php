@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="{{route("psicologa.store")}}" method="POST">
        @csrf

      <h1>Descrição da Solicitação</h1> <br>


         {{-- <a class="btn btn-secondary" href="{{route("aluno.index")}}">Solicitar Atendimento</a> <br> <br>  --}}


          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
              {{-- <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a> --}}
              <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a>
              <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
              <a class="nav-item nav-link active" id="nav-agendamentoDia-tab" data-toggle="tab" href="{{route("psicologa.agendDia")}}" role="tab" aria-controls="nav-agendamentoDia" aria-selected="false">Agendamentos do Dia</a>
              <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico de Atendimentos</a>
            </div>
          </nav>

          <br>

          {{-- <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"></div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
          </div> --}}
           
            <div class="col-sm-5">
                <label for="id-input-comentario" class="form-label">Escreva um comentário caso necessário</label>
                <input name="comentario" type="text" class="form-control" id="id-input-comentario" placeholder="Comentário" required>
            </div>
         
            <div class="col-sm-5">
                <label for="id-input-atdGrupo" class="form-label">Aceita participar de um atendimento em grupo ?</label>
                <input name="atdGrupo" type="text" class="form-control" id="id-input-atdGrupo" placeholder="Atendimento em grupo ?" required>
            </div>
      
            <div class="col-sm-5">
                <label for="id-input-ativo" class="form-label">Seu cadastro está ativo?</label>
                <input name="ativo" type="checkbox" id="id-input-ativo" value="1">
            </div>

            <div class="col-sm-5"> 
                <label for="id-input-periodo" class="form-label">Selecione a data e hora</label>
                <input name="periodo" type="datetime-local" id="id-input-periodo" placeholder="Selecione a data e hora" required>   
            </div> 

            <div class="my-1">
              <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a>
              <button type="submit" class="btn btn-success">Salvar</button>
            </div>



          </form>
        </div>

@endsection
