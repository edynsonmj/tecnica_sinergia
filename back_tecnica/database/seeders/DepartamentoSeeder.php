<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('departamentos')->truncate();
        $departamentos = [
            ['nombre' => 'Cauca'],
            ['nombre' => 'Valle del Cauca'],
            ['nombre' => 'Antioquia'],
            ['nombre' => 'Cundinamarca'],
            ['nombre' => 'Atlantico'],
        ];

        DB::table('departamentos')-> insert($departamentos);
        Schema::enableForeignKeyConstraints();
    }
}
