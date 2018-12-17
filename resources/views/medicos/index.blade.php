@extends('layouts.app')
@section('content')

<div class="container">        
    <div id="main-block" class="col-md-4">
        <h1>Medicos</h1>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <a tabindex="0" id="create-button" class="btn btn-primary" href="{{route('medicos.create')}}">
            <span>Cadastrar Medicos</span>
        </a>    
    </div>

    <div class="col-md-12">
        <div class="divTable">
            <div class="divTableBody">
                <div class="divTableRow">
                        <div class="divTableCell">CRM</div>
                    <div class="divTableCell">Nome</div>
                    <div class="divTableCell">Endereco</div>
                    <div class="divTableCell">Telefone</div>
                    <div class="divTableCell">Especialidade</div>
                    <div class="divTableCell">Opções</div>
                </div>
                @foreach($medicos as $medico)
                <div class="divTableRow">
                    <div class="divTableCell">{{$medico->crm}}</div>
                    <div class="divTableCell">{{$medico->nome}}</div>
                    <div class="divTableCell">{{$medico->endereco}}</div>
                    <div class="divTableCell">{{$medico->telefone}}</div>
                    <div class="divTableCell">{{$medico->especialidade}}</div>
                    
                    <div class="divTableCell">
                        <form method="POST" action="{{ route('medicos.destroy',$medico->id) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a href="{{ route('medicos.edit', $medico->id) }}" title="Editar">EDITAR</a> | <button id="trash-btn" type="submit" class="btn btn-primary">DELETAR</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div><br><br>
                            <a  href="{{ route('home') }}">Voltar</a> 

    </div>
</div>
@endsection