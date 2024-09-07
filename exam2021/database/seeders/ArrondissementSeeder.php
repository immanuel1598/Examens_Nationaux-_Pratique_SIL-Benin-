<?php

namespace Database\Seeders;

use App\Models\Arrondissement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArrondissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arrondissement::create([
            'nom' =>'Arrondissement1',
            'idCommune'=>'2',

        ]);
        Arrondissement::create([
            'nom' =>'Arrondissement2',
            'idCommune'=>'1',

        ]);


    }
}
