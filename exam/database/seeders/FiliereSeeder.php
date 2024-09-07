<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Filiere::create([
            'codefil' => 'AGE',
            'nomfil' => 'administrateur et gestion des entreprises',
                ]);
                
           Filiere::create([
            'codefil' => 'AGRO',
            'nomfil' => 'Agronomie',
                ]);
                
           Filiere::create([
            'codefil' => 'RIT',
            'nomfil' => 'Réseaux Informatique et Télécommunications',
                ]);
                
           Filiere::create([
            'codefil' => 'SIL',
            'nomfil' => 'Systèmes Informatiques et Logiciels',
                ]);
    }
}
