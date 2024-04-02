@extends('layout')
@section('content')
    <div class ="jumbotron">
        <p class =" h1 text-center py-4"> Stardew Valley Quiz </p>
        <p class ="h2 text-center py-4"> Teste seus conhecimentos sobre o famoso jogo de simulação! </p>
    </div>
    <div class ="jumbotron text-center">
       <img src="{{asset('storage/imagens/stardew.png')}}"/>
    </div>
    <div class ="container py-4">
        <div class ="row text-center" >

            <div class ="col-md-" >
            <a href ="/iniciar" class =" btn btn-primary" role ="button">
Começar </a >
            </div>
        </div>
    </div>
@endsection