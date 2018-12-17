<?php

namespace App\Http\Controllers;

use App\Clinicas;
use Validator;
use App\Medicos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function all()
    {
        $clinicas = Clinicas::get();
        return view('clinicas.index', compact('clinicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $medicos = DB::table('medicos')->groupBy('especialidade')->get();  

        if($request->isMethod('post')) {        
            $this->validate($request, [
                'endereco' => 'max:100',
                'telefone' => 'max:100',
                'agenda' => 'max:100',
                'especialidades' => 'max:100'
            ]);

            $clinica = new Clinicas;
            $clinica->endereco = $request->endereco;
            $clinica->telefone = $request->telefone;
            $clinica->agenda = $request->agenda;
            $clinica->especialidades = $request->especialidades;
            $clinica->save();

            return redirect()->route('clinicas.index')->with('status', "Clínica cadastrada com sucesso!");
        }

        return view('clinicas.create', compact('medicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
  
    /**
     * index the form for editing the specified resource.
     *
     * @param  \App\Clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
         $clinica = Clinicas::find($id);
        $medicos = Medicos::get();

        if($request->isMethod('patch')) {
            $validator = Validator::make($request->all(),
                [
                    'endereco' => 'required|max:100',
                    'telefone' => 'required|max:100',
                    'agenda' => 'required|max:100',
                    'especialidades' => 'required',
                ],
                [

                ]
            );
            if($validator->fails())
                return back()->withInput($request->all())->withErrors($validator->errors());
            
            $clinica->update([
                'endereco' => $request->endereco,
                'telefone' => $request->telefone,
                'agenda' => $request->agenda,
                'especialidades' => $request->especialidades
            ]);

            return redirect()->route('clinicas.index')->with('sucesss', 'Dados do Médico atualizados com sucesso.');
        }
        return view('clinicas.edit', compact('clinica', 'medicos'));
    }

    public function destroy(Request $request, $id)
    {
        $clinica = Clinicas::find($id);
        $clinica->delete();

        return redirect()->route('clinicas.index')->with('error', 'Médico removido com sucesso.');
    }

     public function show($id)
    {
        $clinica = Clinicas::find($id);
        $medicos = Medicos::orderBy('id');
        $medicos->where("especialidade", "like", "%{$clinica->especialidades}%");
        $medicos = $medicos->paginate(20);
        return view('clinicas.show', compact('clinica', 'medicos'));
    }


}
