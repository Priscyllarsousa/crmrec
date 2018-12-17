@extends('layouts.app')
@section('content')

<div class="container">        
    <div id="main-block" class="col-md-4">
        <h1>Clinicas</h1>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <a tabindex="0" id="create-button" class="btn btn-primary" href="{{route('clinicas.create')}}">
            <span>Cadastrar clinicas</span>
        </a>    
    </div>

	<div class="col-md-12">
		<div class="divTable">
			<div class="divTableBody">
				<div class="divTableRow">
					
					<div class="divTableCell">ID</div>
					<div class="divTableCell">Endereco</div>
					<div class="divTableCell">Telefone</div>
					<div class="divTableCell">Agenda</div>
					<div class="divTableCell">Especialidades</div>
					<div class="divTableCell">Opções</div>
				</div>
				@foreach($clinicas as $key=>$clinica)
				<div class="divTableRow">
					
					<div class="divTableCell">{{$clinica->id}}</div>
					<div class="divTableCell">{{$clinica->endereco}}</div>
					<div class="divTableCell">{{$clinica->telefone}}</div>
					<div class="divTableCell">{{$clinica->agenda}}</div>
					<div class="divTableCell">{{$clinica->especialidades}}</div>
					
					<div class="divTableCell">
						<form method="POST" action="{{ route('clinicas.destroy', $clinica->id) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a href="{{ route('clinicas.edit', $clinica->id) }}" title="Editar">EDITAR</a> | 
                            <a href="{{ route('clinicas.show', $clinica->id) }}" title="Show">Mostrar</a> | <button id="trash-btn" type="submit" class="btn btn-primary">DELETAR</button>
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