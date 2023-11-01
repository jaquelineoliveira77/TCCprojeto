@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <br> <br>

                    <a href="{{route("aluno.index")}}" class="btn btn-primary">Menu de Atendimentos</a>
                    <a href="{{route("alunoCad.create")}}" class="btn btn-primary">Realizar Cadastro</a>
                    <a href="/" class="btn btn-primary">Voltar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
