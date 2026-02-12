<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('tipo_documentos')->truncate();

        $tipos = [
            ['nombre' => 'Cédula de Ciudadanía'],
            ['nombre' => 'Tarjeta de Identidad'],
            ['nombre' => 'Cédula de Extranjería'],
            ['nombre' => 'Pasaporte'],
        ];

        DB::table('tipo_documentos')->insert($tipos);

        Schema::enableForeignKeyConstraints();
    }
}
