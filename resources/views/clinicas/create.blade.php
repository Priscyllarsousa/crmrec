@extends('layouts.app')
@section('content')
<div class="container" id="registrar-pagina">
    <div class="voltar-inicial">
        <a href="{{ route('clinicas.index') }}/">Voltar</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h1>Cadastrar Clínica</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('clinicas.create') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>
                            <div class="col-md-6">
                            <input tabindex="1" type="text"  name="endereco" class="form-control required" placeholder="Endereço"/>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                            <div class="col-md-6">
                            <input tabindex="2" type="text"  name="telefone" class="form-control" placeholder="telefone" required/>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="agenda" class="col-md-4 col-form-label text-md-right">{{ __('Agenda') }}</label>
                            <div class="col-md-6">
                                <input tabindex="3" type="text"  name="agenda" class="form-control" placeholder="agenda" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidades" class="col-md-4 col-form-label text-md-right">{{ __('Especialização') }}</label>
                            <div class="col-md-6">
                                <select id="especialidades" name="especialidades" class="form-control">
                                    @foreach($medicos as $medico)
                                    <option value="{{ $medico->especialidade }}" {{ old('especialidades') == $medico->id ? 'selected' : '' }}>{{ $medico->especialidade }}</option>
                                    @endforeach
                                </select>
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