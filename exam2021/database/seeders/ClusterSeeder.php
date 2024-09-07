<?php

namespace Database\Seeders;

use App\Models\Cluster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cluster::create([
            'nom' =>'cluster1',
            'idFilière'=>'1',
            'idVillage'=>'1'
        ]);
        Cluster::create([
            'nom' =>'cluster2',
            'idFilière'=>'1',
            'idVillage'=>'2'
        ]);
        Cluster::create([
            'nom' =>'cluster3',
            'idFilière'=>'2',
            'idVillage'=>'2'
        ]);



    }
}
