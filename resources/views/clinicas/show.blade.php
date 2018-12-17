@extends('layouts.app')
@section('content')
<div class="container" id="registrar-pagina">
    <div class="voltar-inicial">
        <a href="{{ route('clinicas.index') }}/">Voltar</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h1>Mostrar Clínica</h1></div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>
                        <div class="col-md-6">
                        <input tabindex="1" type="text"  name="endereco" class="form-control required" placeholder="Endereço" value="{{$clinica->endereco}}"/>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                        <div class="col-md-6">
                        <input tabindex="2" type="text"  name="telefone" class="form-control" placeholder="telefone" value="{{$clinica->telefone}}" required/>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="agenda" class="col-md-4 col-form-label text-md-right">{{ __('Agenda') }}</label>
                        <div class="col-md-6">
                            <input tabindex="3" type="text"  name="agenda" class="form-control" placeholder="agenda" value="{{$clinica->agenda}}" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="especialidades" class="col-md-4 col-form-label text-md-right">{{ __('Especialização') }}</label>
                        <div class="col-md-6">
                            <input tabindex="3" type="text"  name="especialidades" class="form-control" value="{{$clinica->especialidades}}" placeholder="agenda" required/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="divTable">
            <div class="divTableBody">
                <h1>Lista de medicos</h1>
                <div class="divTableRow">
                        <div class="divTableCell">CRM</div>
                    <div class="divTableCell">Nome</div>
                    <div class="divTableCell">Endereco</div>
                    <div class="divTableCell">Telefone</div>
                    <div class="divTableCell">Especialidade</div>
                </div>
                @foreach($medicos as $medico)
                <div class="divTableRow">
                    <div class="divTableCell">{{$medico->crm}}</div>
                    <div class="divTableCell">{{$medico->nome}}</div>
                    <div class="divTableCell">{{$medico->endereco}}</div>
                    <div class="divTableCell">{{$medico->telefone}}</div>
                    <div class="divTableCell">{{$medico->especialidade}}</div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection