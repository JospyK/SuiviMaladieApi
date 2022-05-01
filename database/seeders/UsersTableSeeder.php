<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'sexe' => 'M',
                'assurance_medicale' => Str::random(10),
                'code_assurance' => Str::random(10),
                'reference_medecin' => Str::random(10),
                'personne_a_prevenir' => "Jospy",
                'telephone_personne_a_prevenir'=> "67 92 92 11",
            ],
        ];

        User::insert($users);

        $usersFactory = User::factory()->count(5)->create();
    }
}
