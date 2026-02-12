<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'tipo_documento_id',
        'numero_documento',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'genero_id',
        'departamento_id',
        'municipio_id',
        'correo',
    ];
    
    public function tipoDocumento(){
        return $this->belongsTo(tipoDocumento::class);
    }

    public function departamento(){
        return $this->belongsTo(departamento::class);
    }

    public function municipio(){
        return $this->belongsTo(municipio::class);
    }

    public function genero(){
        return $this->belongsTo(genero::class);
    }
}
