<?php

namespace Database\Seeders;

use App\Models\Ordonnance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdonnanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ordonnance = [
            [
                'consultation_id'    => 1,
            ],
            [
                'consultation_id'    => 2,
            ],
        ];

        Ordonnance::insert($ordonnance);
    }
}
