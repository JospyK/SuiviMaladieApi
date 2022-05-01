<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Examan;

class ExamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examan = [
            [
                'id'    => 1,
                'title' => 'Examen du poumon',
            ],
            [
                'id'    => 2,
                'title' => 'Examen du coeur',
            ],
        ];

        Examan::insert($examan);
    }
}
