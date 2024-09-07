<?php

namespace Database\Seeders;

use App\Models\chauffeur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChauffeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        chauffeur::create([
            'nom' =>'ADIMI',
            'prenoms'=>'Jeannie',
            'telephone'=>'12345678',
            'sexe'=>'F',
            'disponible' => false
        ]);
        chauffeur::create([
            'nom' =>'SOGLO',
            'prenoms'=>'Bernard',
            'telephone'=>'87654321',
            'sexe'=>'M',
            'disponible' => true
        ]);
    }
}
