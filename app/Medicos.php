<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
    protected $table = 'medicos';

    protected $fillable = ['crm', 'nome', 'endereco', 'telefone', 'especialidade'];
}
