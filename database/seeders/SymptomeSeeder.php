<?php

namespace Database\Seeders;

use App\Models\Symptome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SymptomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $symptomes = [
            [
                'id'    => 1,
                'nom' => 'Maux de tête',
                'description' => "description symptomes",
            ],
            [
                'id'    => 2,
                'nom' => 'Douleurs à la poitrine',
                'description' => 'description symptomes'
            ],
        ];

        Symptome::insert($symptomes);
    }
}
