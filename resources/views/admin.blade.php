@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-success" href="{{route("psicologa.index")}}">Menu</a>
                    <a class="btn btn-success" href="{{route("psicologaCad.create")}}">Cadastro de Servidor</a>
                    <a class="btn btn-success" href="{{route("psicologa.create")}}">Solicitar Atendimento</a>
                    <a class="btn btn-success" href="{{route("psicologaCadAtd.create")}}">Cadastrar Atendimento</a>
                    <a class="btn btn-success" href="{{route("providencia.create")}}">Cadastrar Providencia</a> <br><br>
                    <a class="btn btn-success" href="{{route("motivo.create")}}">Cadastrar Motivos</a>

                    <a class="btn btn-info" href="{{url("/")}}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
