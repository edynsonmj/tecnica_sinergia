<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('pacientes')->truncate();

        // Obtener IDs aleatorios de las tablas maestras
        $tipoDocId = DB::table('tipo_documentos')->first()->id;
        $generoId = DB::table('generos')->first()->id;
        $deptoId = DB::table('departamentos')->first()->id;
        $muniId = DB::table('municipios')->where('departamento_id', $deptoId)->first()->id;

        $tipoDocId2 = DB::table('tipo_documentos')->skip(1)->first()->id;
        $generoId2 = DB::table('generos')->skip(1)->first()->id;
        $deptoId2 = DB::table('departamentos')->skip(1)->first()->id;
        $muniId2 = DB::table('municipios')->where('departamento_id', $deptoId)->skip(1)->first()->id;

        $pacientes = [
            [
                'tipo_documento_id' => $tipoDocId,
                'numero_documento' => '1001001',
                'nombre1' => 'Juan',
                'apellido1' => 'Perez',
                'genero_id' => $generoId,
                'departamento_id' => $deptoId,
                'municipio_id' => $muniId,
                'correo' => 'juan@example.com'
            ],
            [
                'tipo_documento_id' => $tipoDocId,
                'numero_documento' => '2002002',
                'nombre1' => 'Maria',
                'apellido1' => 'Gomez',
                'genero_id' => $generoId,
                'departamento_id' => $deptoId,
                'municipio_id' => $muniId,
                'correo' => 'maria@example.com'
            ],
            [
                'tipo_documento_id' => $tipoDocId2,
                'numero_documento' => '1001003',
                'nombre1' => 'Roberto',
                'apellido1' => 'Perez',
                'genero_id' => $generoId2,
                'departamento_id' => $deptoId2,
                'municipio_id' => $muniId2,
                'correo' => 'roberto@example.com'
            ],
            [
                'tipo_documento_id' => $tipoDocId2,
                'numero_documento' => '2002004',
                'nombre1' => 'Jesus',
                'apellido1' => 'Gomez',
                'genero_id' => $generoId2,
                'departamento_id' => $deptoId2,
                'municipio_id' => $muniId2,
                'correo' => 'jesus@example.com'
            ],
        ];

        foreach ($pacientes as $paciente) {
            Paciente::create($paciente);
        }

        Schema::enableForeignKeyConstraints();
    }
}
