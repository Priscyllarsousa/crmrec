@extends('layouts.app')
@section('content')
<div class="container" id="registrar-pagina">
    <div class="voltar-inicial">
        <a href="{{ route('medicos.index') }}/">Voltar</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h1>Cadastrar Médico</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('medicos.create') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="crm" class="col-md-4 col-form-label text-md-right">{{ __('CRM') }}</label>
                            <div class="col-md-6">
                            <input tabindex="1" type="number"  name="crm" class="form-control required" placeholder="CRM"/>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                            <input tabindex="1" type="text"  name="nome" class="form-control required" placeholder="Endereço"/>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>
                            <div class="col-md-6">
                            <input tabindex="2" type="text"  name="endereco" class="form-control" placeholder="Endereço" required/>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                            <div class="col-md-6">
                                <input tabindex="3" type="text"  name="telefone" class="form-control" placeholder="telefone" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidade" class="col-md-4 col-form-label text-md-right">{{ __('Especialidade') }}</label>
                            <div class="col-md-6">
                                <input tabindex="3" type="text"  name="especialidade" class="form-control" placeholder="especialidade" required/>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection