<?php

namespace Database\Seeders;

use App\Models\ListeMaladie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListeMaladieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maladies = [
            [
                'id'    => 1,
                'nom' => "NomMaladie1",
                'description' => "Description",
                'categorie' => "A",
            ],
            [
                'id'    => 2,
                'nom' =>  "NomMaladie1",
                'description' =>  "Description2",
                'categorie' => "B",
            ],
        ];

        ListeMaladie::insert($maladies);
    }
}
