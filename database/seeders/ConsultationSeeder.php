<?php

namespace Database\Seeders;

use App\Models\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consultation = [
            [
                'name' => 'Consultation1',
                'description' => 'Ceci est la descritption de la consulatation' ,
                'patient_id' => rand(2, 5),
                'medecin_id' => 1,
            ],
            [
                'name' => 'Consultation2',
                'description' => 'Ceci est la descritption de la consulatation' ,
                'patient_id' => rand(2, 5),
                'medecin_id' => 1,
            ],
        ];

        Consultation::insert($consultation);
    }
}
