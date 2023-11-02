@extends('layouts.app')

@section('content')
    <div class="container">
       
        Página inicial.

        {{-- <link rel="styleheet" href="/css/style.css"> --}}

        <head>
            <!-- Adicione o link para seu arquivo CSS -->
            <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
        </head>
        
        <body class="background-image">
            <!-- Restante do conteúdo da sua página aqui -->
            <img id="/img/banner.jpg" src="{{ asset('/img/Banner.jpg') }}"
         alt="Banner">
        </body>


        <br> <br>

        <a href="{{route("home")}}" class="btn btn-primary">Home</a>

        <br> <br>


        {{-- <img id="/img/banner.jpg" src="{{ asset('/img/Banner.jpg') }}"
         alt="Banner"> --}}



      
    </div>

@endsection
