<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        DB::table('departamentos')->insert([
            'nombre'=>'Computo',
            'descripcion'=>''
        ]);*/
        DB::table('departamentos')->insert([
            'nombre'=>'Electrónica',
            'descripcion'=>''
        ]);
        DB::table('departamentos')->insert([
            'nombre'=>'Línea blanca',
            'descripcion'=>''
        ]);
        DB::table('departamentos')->insert([
            'nombre'=>'Telefonía',
            'descripcion'=>''
        ]);
        /*
        Departamento::factory()->create([
            'nombre'=>'Electrónica',
            'descripcion'=>''
        ]);
        Departamento::factory()->create([
            'nombre'=>'Telefonía',
            'descripcion'=>''
        ]);
        Departamento::factory()->create([
            'nombre'=>'Línea blanca',
            'descripcion'=>''
        ]);*/
    }
}
