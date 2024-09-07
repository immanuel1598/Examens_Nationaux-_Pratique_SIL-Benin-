<?php

namespace Database\Seeders;

use App\Models\Candidat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidat::create([
            'nom' => 'ADIMI',
            'prénom' => 'jean',
            'datnais'=>'97/08/10/',
            'ville'=>'Cotonou',
            'sexe'=>'M',
            'codefil'=>'SIL',
                ]);
                Candidat::create([
                    'nom' => 'SOGLO',
                    'prénom' => 'Bernard',
                    'datnais'=>'94/09/12',
                    'ville'=>'porto-novo',
                    'sexe'=>'M',
                    'codefil'=>'RIT',
                        ]);
                        Candidat::create([
                            'nom' => 'DOSSOU',
                            'prénom' => 'Brice',
                            'datnais'=> '95/12/04',
                            'ville'=>'Cotonou',
                            'sexe'=>'M',
                            'codefil'=>'AGRO',
                                ]);
                                Candidat::create([
                                    'nom' => 'CHABI SIKA',
                                    'prénom' => 'Eric',
                                    'datnais'=>'93/11/25',
                                    'ville'=>'Parakou',
                                    'sexe'=>'M',
                                    'codefil'=>'SIL',
                                        ]);
                                        Candidat::create([
                                            'nom' => 'DOSSOU',
                                            'prénom' => 'Chantal',
                                            'datnais'=>'94/02/18',
                                            'ville'=>'Abomey',
                                            'sexe'=>'F',
                                            'codefil'=>'SIL',
                                                ]);
                                                Candidat::create([
                                                    'nom' => 'ZINSOU',
                                                    'prénom' => 'Jules',
                                                    'datnais'=>'96/08/21',
                                                    'ville'=>'Ouidah',
                                                    'sexe'=>'M',
                                                    'codefil'=>'SIL',
                                                        ]);
                                                        Candidat::create([
                                                            'nom' => 'ALAO',
                                                            'prénom' => 'Mariam',
                                                            'datnais'=>'1996/04/30',
                                                            'ville'=>'Porto-Novo',
                                                            'sexe'=>'F',
                                                            'codefil'=>'AGE',
                                                                ]);
                                                                Candidat::create([
                                                                    'nom' => 'CHABI SIKA',
                                                                    'prénom' => 'Juliette',
                                                                    'datnais'=>'1996/04/30',
                                                                    'ville'=>'Bohicon',
                                                                    'sexe'=>'F',
                                                                    'codefil'=>'SIL',
                                                                        ]);
                                                                      
        
    }
}
