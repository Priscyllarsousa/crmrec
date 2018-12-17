@extends('layouts.app')

@section('content')

<div class="container" id="registrar-pagina">
    <div class="voltar-inicial">
        <a href="{{ route('clinicas.index') }}/">Voltar</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Editar Clínica</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('clinicas.edit', $clinica->id) }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>
                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control" name="endereco" value="{{$clinica->endereco}}">
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
                                <input id="telefone" type="text" class="form-control" name="telefone" value="{{$clinica->telefone}}">
                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="agenda" class="col-md-4 col-form-label text-md-right">{{ __('Ageda') }}</label>
                            <div class="col-md-6">
                                <input id="agenda" type="text" class="form-control" name="agenda" value="{{$clinica->agenda}}">
                                @if ($errors->has('agenda'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('agenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidades" class="col-md-4 col-form-label text-md-right">{{ __('Especialidades') }}</label>



                            <div class="col-md-6">
                                <select id="especialidades" name="especialidades" class="form-control">
                                    @foreach($medicos as $medico)
                                        <option value="{{ $medico->especialidade }}" {{ old('especialidades') == $medico->especialidade || $clinica->especialidades == $medico->especialidade ? 'selected' : '' }}>{{ $medico->especialidade }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar dados da Clinica') }}
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