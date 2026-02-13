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
        print 'index';
        return Paciente::with(['tipoDocumento', 'genero', 'departamento', 'municipio'])->get();
    }

    /**
     * retorna un paciente consultando el id del sistema
     */
    public function show($id){
        print 'show';
        return Paciente::with(['tipoDocumento', 'genero', 'departamento', 'municipio' ])->findOrFail($id);
    }

    /**
     * retorna un paciente consultado el numero de identificacion del paciente
     */
    public function showByDocumento($id){
        print 'showByDocumento';
        $paciente = Paciente::with(['tipoDocumento', 'genero', 'departamento', 'municipio' ])
            ->where('numero_documento', $id)
            ->firstOrFail();
        return $paciente;
    }

    /**
     * guarda un paciente en el sistema
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_documento_id' => 'required|exists:tipo_documentos,id',
            'numero_documento' => 'required|unique:pacientes',
            'nombre1' => 'required|string|max:50',
            'apellido1' => 'required|string|max:50',
            'genero_id' => 'required|exists:generos,id',
            'departamento_id' => 'required|exists:departamentos,id',
            'municipio_id' => 'required|exists:municipios,id',
            'correo' => 'required|email',
        ]);

        return Paciente::create($validatedData);
    }

    /**
     * actualiza un paciente en el sistema
     */
    public function update(Request $request, $id){
        $paciente = Paciente::findOrFail($id);
        $validatedData = $request->validate([
            'tipo_documento_id' => 'required|exists:tipo_documentos,id',
            //'numero_documento' => 'required|unique:pacientes',
            'nombre1' => 'required|string|max:50',
            'apellido1' => 'required|string|max:50',
            'genero_id' => 'required|exists:generos,id',
            'departamento_id' => 'required|exists:departamentos,id',
            'municipio_id' => 'required|exists:municipios,id',
            'correo' => 'required|email',
        ]);

        $paciente->update($validatedData);
        return $paciente;
    }

    /**
     * elimina un paciente del sistema
     */
    public function destroy($id){
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        return response()->json(['message'=>'Paciente eliminado']);
    }
}
