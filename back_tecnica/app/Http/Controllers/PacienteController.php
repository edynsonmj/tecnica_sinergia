<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paciente::with(['tipoDocumento', 'genero', 'departamento', 'municipio'])->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_documento_id' => 'required|exists:tipo_documentos,id',
            'numero_documento' => 'required|unique:pacientes',
            'nombre1' => 'required|string',
            'apellido1' => 'required|string',
            'genero_id' => 'required|exists:generos,id',
            'departamento_id' => 'required|exists:departamentos,id',
            'municipio_id' => 'required|exists:municipios,id',
            'correo' => 'required|email',
        ]);

        return Paciente::create($validatedData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
