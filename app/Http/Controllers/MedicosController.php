<?php

namespace App\Http\Controllers;

use App\Medicos;
use Illuminate\Http\Request;
use Validator;

class MedicosController extends Controller
{
      public function all()
    {
        $medicos = Medicos::get();
        return view('medicos.index', compact('medicos'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')) {        
            $this->validate($request, [
                'crm' => 'required|max:50',
                'nome' => 'required|max:120',
                'endereco' => 'max:100',
                'telefone' => 'max:100',
                'especialidade' => 'max:100'
            ]);

            $medico = new Medicos;
            $medico->crm = $request->crm;
            $medico->nome = $request->nome;
            $medico->endereco = $request->endereco;
            $medico->telefone = $request->telefone;
            $medico->especialidade = $request->especialidade;
            $medico->save();

            return redirect()->route('medicos.index')->with('status', "Médico cadastrado com sucesso!");
        }

        return view('medicos.create');
    }

 
    public function edit(Request $request, $id)
    {
        $medico = Medicos::find($id);

        if($request->isMethod('patch')) {
            $validator = Validator::make($request->all(),
                [
                    'crm' => 'required|max:50',
                    'nome' => 'required|max:120',
                    'endereco'     => 'required|max:100',
                    'telefone'     => 'required|max:100',
                    'especialidade'     => 'required|max:100',
                ],
                [

                ]
            );
            if($validator->fails())
                return back()->withInput($request->all())->withErrors($validator->errors());
            
            $medico->update([
                'crm' => $request->crm,
                'nome' => $request->nome,
                'endereco' => $request->endereco,
                'telefone' => $request->telefone,
                'especialidade' => $request->especialidade
            ]);

            return redirect()->route('medicos.index')->with('sucesss', 'Dados do Médico atualizados com sucesso.');
        }
        return view('medicos.edit', compact('medico'));
    }

    public function destroy(Request $request, $id)
    {
        $medico = Medicos::find($id);
        $medico->delete();

        return redirect()->route('medicos.index')->with('error', 'Médico removido com sucesso.');
    }
}
