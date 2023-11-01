@extends('layouts.app')

@section('content')
    <div class="container">
       
        Página inicial.

        <link rel="styleheet" href="/css/style.css">

        <br> <br>

        <a href="{{route("home")}}" class="btn btn-primary">Home</a>

        <br> <br>


        <img id="/img/banner.jpg" src="{{ asset('/img/Banner.jpg') }}"
         alt="Banner">



      
    </div>

@endsection
