<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Medecin',
            ],
            [
                'id'    => 2,
                'title' => 'Patient',
            ],
        ];

        Role::insert($roles);
    }
}
