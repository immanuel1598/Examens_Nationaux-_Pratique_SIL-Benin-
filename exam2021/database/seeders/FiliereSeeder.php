<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filiere::create([
            'nom' =>'AL',
        ]);
        Filiere::create([
            'nom' =>'SI',
        ]);
        Filiere::create([
            'nom' =>'src',
        ]);
    }
}
