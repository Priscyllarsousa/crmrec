<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinicas extends Model
{
    protected $table = 'clinicas';

    protected $fillable = ['id', 'endereco', 'telefone', 'agenda', 'especilidades'];

    public function medico() {
     	return $this->belongsTo('App\Medicos');
    }

}
