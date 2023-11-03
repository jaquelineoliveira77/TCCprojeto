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

                    <a class="btn btn-success" href="{{route("aluno.index")}}" >Menu de Atendimentos</a>
                    <a class="btn btn-success" href="{{route("alunoCad.create")}}" >Realizar Cadastro</a>
                    <a class="btn btn-info" href="/" >Voltar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
