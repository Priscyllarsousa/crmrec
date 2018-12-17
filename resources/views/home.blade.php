@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center;" class="card-header">Bem vindo!</div>

                <div class="card-body"  style="text-align: center;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                </div>
                   
                    <div class="cruds" style="margin-left: 15px; padding-bottom: 20px;">
                        Você está logado! <br><br>
                        <a href="{{route('medicos.index')}}">Acessar Médicos</a>
                          <br>
                         <a  href="{{route('clinicas.index')}}">Acessar Clinicas</a>
                   </div>                 
               </div>
        </div>
    </div>
</div>
@endsection
