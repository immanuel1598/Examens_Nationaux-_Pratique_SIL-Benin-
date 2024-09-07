<?php

namespace Database\Seeders;

use App\Models\inscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        inscription::create([
            'idadh' =>'1',
            'année'=>'2015',
            'dateinscription'=>'2015/01/10',
            'domaine'=>'santé',

        ]);
        inscription::create([
            'idadh' =>'2',
            'année'=>'2015',
            'dateinscription'=>'2015/01/11',
            'domaine'=>'santé',

        ]);
        inscription::create([
            'idadh' =>'1',
            'année'=>'2016',
            'dateinscription'=>'2016/01/04',
            'domaine'=>'santé',

        ]);
        inscription::create([
            'idadh' =>'2',
            'année'=>'2016',
            'dateinscription'=>'2016/01/07',
            'domaine'=>'formation',

        ]);
        inscription::create([
            'idadh' =>'1',
            'année'=>'2017',
            'dateinscription'=>'2017/01/05',
            'domaine'=>'assainissement',

        ]);
        inscription::create([
            'idadh' =>'2',
            'année'=>'2017',
            'dateinscription'=>'2017/01/06',
            'domaine'=>'assainissement',

        ]);
        inscription::create([
            'idadh' =>'3',
            'année'=>'2017',
            'dateinscription'=>'2017/01/10',
            'domaine'=>'santé',

        ]);

    }
}
