@extends('layout')
@section('content')

<div class ="card border ">
        <div class ="card-body ">
                <div class ="row">
                    <div class ="col-md-6 col-sm-6 text-center ">
                         <p class =" texto " >
                             <h4> <strong > Pergunta 1: </ strong > </h4 >
                        </p >
                 </div>
              </div >



            <form action =" {{route('dadosPagina1') }}" method ="POST" >
                @csrf


             <div class ="<form-group py-4">
                <label for="pergunta"> <h3 > <strong > Qual a recompensa por chegar ao nível 100 da caverna das caveiras pela primeira vez? </ strong > </h3 > </label>



            <div class ="<form-check py-4">
                <input class =" form-check-input " type ="radio" name ="
                       pergunta" id ="pergunta" value ="A">
                <label class =" form-check-label " for="pergunta" >
                    <h5 > 5 fragmentos prismaticos
                        </h5 >
                    </label >
                 </ div >



                <div class ="<form-check py-4">
                 <input class =" form-check-input " type ="radio" name ="pergunta"
                        id ="pergunta" value ="B">
                    <label class =" form-check-label " for="pergunta" >
                    <h5 > Uma fruta estrela </h5 >
                </label >
                </ div >

                <div class ="<form-check py-4">
                 <input class =" form-check-input " type ="radio" name ="pergunta"
                        id ="pergunta" value ="C">
                    <label class =" form-check-label " for="pergunta" >
                    <h5 > Leite de irídio</h5 >
                </label >
                </ div >

                <div class ="<form-check py-4">
                 <input class =" form-check-input " type ="radio" name ="pergunta"
                        id ="pergunta" value ="D">
                    <label class =" form check-label " for="pergunta" >
                    <h5 > Um ovo de galinha dourada </h5 >
                </label >
                </ div >

 

 </div >
 <button type ="submit" class ="btn btn-primary btn-sm"> Próxima </button>
                <button onclick="window.location.href = '/';" type ="button"
                     class =" btn btn-danger btn-sm"> Desistir </button >
         </form >
     </div >
 </div >
 @endsection
