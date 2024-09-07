<?php

namespace Database\Seeders;

use App\Models\village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        village::create([
            'nom' =>'village1',
'idArrondissement'=>'1'
        ]);
        village::create([
            'nom' =>'village2',
'idArrondissement'=>'2'
        ]);
    }
}
