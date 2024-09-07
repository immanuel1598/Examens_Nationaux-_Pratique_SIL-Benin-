<?php

namespace Database\Seeders;

use App\Models\adherent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdherentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        adherent::create([
            'nom' =>'ADIMI',
            'prénom'=>'Jean',
            'datnais'=>'97/08/10',
            'ville'=>'Cotonou',
            'sexe'=>'M'
        ]);
        adherent::create([
            'nom' =>'SOGLO',
            'prénom'=>'Bernard',
            'datnais'=>'94/09/12',
            'ville'=>'Porto-novo',
            'sexe'=>'M'
        ]);
        adherent::create([
            'nom' =>'DOSSOU',
            'prénom'=>'Chantal',
            'datnais'=>'95/12/04',
            'ville'=>'Cotonou',
            'sexe'=>'F'
        ]);
        }
}
