<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checklist extends Model
{
    use HasFactory;
    protected $table="checklist";
    protected $fillable = [
   
      'mes',
      'macro',
      'Fila_unidadeHospitalar',
      'unidade_hospitalarDesejada',
      'obs',
      'dataInformacao_Depuracao',
      'nligacoes',
      'login',
    ];
}


