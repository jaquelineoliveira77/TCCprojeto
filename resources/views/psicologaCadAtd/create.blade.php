
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("psicologaCadAtd.store")}}" method="POST">
            @csrf

            <h1>Cadastro de Atendimentos</h1> <br>


            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{route("psicologa.index")}}" role="tab" aria-controls="nav-home" aria-selected="true">Menu</a>
                  <a class="nav-item nav-link active" id="nav-cad-tab" data-toggle="tab" href="{{route("psicologaCad.create")}}" role="tab" aria-controls="nav-cad" aria-selected="false">Cadastro de Servidor</a>
                  <a class="nav-item nav-link active" id="nav-atendimento-tab" data-toggle="tab" href="{{route("psicologa.create")}}" role="tab" aria-controls="nav-atendimento" aria-selected="false">Solicitar Atendimento</a> 
                  <a class="nav-item nav-link active" id="nav-pendente-tab" data-toggle="tab" href="{{route("psicologa.show")}}" role="tab" aria-controls="nav-pendente" aria-selected="false">Atendimentos Pendentes</a>
                  <a class="nav-item nav-link active" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Agendamentos do Dia</a>
                  <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("providencia.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Providências Cadastradas</a>
                  <a class="nav-item nav-link active" id="nav-show-tab" data-toggle="tab" href="{{route("motivo.show")}}" role="tab" aria-controls="nav-descricao" aria-selected="false">Motivos Cadastradas</a>
                  <a class="nav-item nav-link active" id="nav-inspecaoAtendimento-tab" data-toggle="tab" href="{{route("psicologaCadAtd.show")}}" role="tab" aria-controls="nav-inspecaoAtendimento" aria-selected="false">Inspeção de Atendimentos</a>
                </div>
            </nav>

            <br>

            {{-- <div class="col-sm-5">
                <label for="id-input-idUser" class="form-label">ID User</label>
                <input type="text" class="form-control" id="id-input-idUser" aria-describedby="idHelp" placeholder="#" disabled> 
                <div id="idUser" class="form-text">Não será necessário cadastrar um id</div>
            </div> --}}

            <div class="form-group">
                <label for="id-input-users">Usuário</label>
                <select class="form-select" name="idUsers" aria-label="Selecione um aluno">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id-input-solicitacaos">Solicitacao</label>
                <select class="form-select" name="Solicitacaos_id" aria-label="Selecione uma solicitação">
                    @foreach ($solicitacaos as $solicitacao)
                        <option value="{{$solicitacao->id}}">{{$solicitacao->comentario}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id-input-providencia">Providencia</label>
                <select class="form-select" name="idProvidencia" aria-label="Selecione uma providencia">
                    @foreach ($providencias as $providencia)
                        <option value="{{$providencia->idProvidencia}}">{{$providencia->descricao}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id-input-motivo">Motivos</label>
                <select class="form-select" name="idMotivos" aria-label="Selecione um motivo">
                    @foreach ($motivos as $motivo)
                        <option value="{{$motivo->idMotivos}}">{{$motivo->descricao}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-5">
                <label for="id-input-intervencao" class="form-label">Intervenção</label>
                <input name="intervencao" type="text" class="form-control" id="id-input-intervencao" placeholder="Digite a intervenção" required>
            </div>

            <div class="col-sm-5">
                <label for="id-input-observacoes" class="form-label">Observações</label>
                <input name="observacoes" type="text" class="form-control" id="id-input-observacoes" placeholder="Digite a observação" required>
            </div>


            <div class="my-1">
                <a href="{{route("psicologa.index")}}" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>

        </form>
    </div>

  @endsection