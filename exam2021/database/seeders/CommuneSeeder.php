<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Commune::create([
            'nom' =>'Commune1',
            'idDepartement'=>'1'
        ]);
        Commune::create([
            'nom' =>'Commune2',
            'idDepartement'=>'2'
        ]);
    }
}
