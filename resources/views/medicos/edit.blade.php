@extends('layouts.app')

@section('content')

<div class="container" id="registrar-pagina">
    <div class="voltar-inicial">
        <a href="{{ route('medicos.index') }}/">Voltar</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Editar Médico</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('medicos.edit', $medico->id) }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="crm" class="col-md-4 col-form-label text-md-right">{{ __('CRM') }}</label>
                            <div class="col-md-6">
                                <input id="crm" type="number" class="form-control" name="crm" value="{{$medico->crm}}">
                                @if ($errors->has('crm'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('crm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{$medico->nome}}">
                                @if ($errors->has('nome'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>
                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control" name="endereco" value="{{$medico->endereco}}">
                                @if ($errors->has('endereco'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control" name="telefone" value="{{$medico->telefone}}">
                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidade" class="col-md-4 col-form-label text-md-right">{{ __('Especialidade') }}</label>
                            <div class="col-md-6">
                                <input id="especialidade" type="text" class="form-control" name="especialidade" value="{{$medico->especialidade}}">
                                @if ($errors->has('especialidade'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('especialidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar dados do Médico') }}
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