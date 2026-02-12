<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Schema::disableForeignKeyConstraints();
        DB::table('municipios')->truncate();

        
        $cauca = DB::table('departamentos')->where('nombre', 'Cauca')->first()->id;
        $valle = DB::table('departamentos')->where('nombre', 'Valle del Cauca')->first()->id;
        $antioquia = DB::table('departamentos')->where('nombre', 'Antioquia')->first()->id;
        $cundinamarca = DB::table('departamentos')->where('nombre', 'Cundinamarca')->first()->id;
        $atlantico = DB::table('departamentos')->where('nombre', 'Atlantico')->first()->id;

        $municipios = [
            // Cauca
            ['nombre' => 'Popayán', 'departamento_id' => $cauca],
            ['nombre' => 'Santander de Quilichao', 'departamento_id' => $cauca],
            // Valle
            ['nombre' => 'Cali', 'departamento_id' => $valle],
            ['nombre' => 'Palmira', 'departamento_id' => $valle],
            // Antioquia
            ['nombre' => 'Medellín', 'departamento_id' => $antioquia],
            ['nombre' => 'Envigado', 'departamento_id' => $antioquia],
            // Cundinamarca
            ['nombre' => 'Bogotá', 'departamento_id' => $cundinamarca],
            ['nombre' => 'Zipaquirá', 'departamento_id' => $cundinamarca],
            // Atlántico
            ['nombre' => 'Barranquilla', 'departamento_id' => $atlantico],
            ['nombre' => 'Soledad', 'departamento_id' => $atlantico],
        ];

        DB::table('municipios')->insert($municipios);

        Schema::enableForeignKeyConstraints();
    }
}
