<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ListeMaladieSeeder::class,

            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,

            ConsultationSeeder::class,
            HospitalisationSeeder::class,
            //ListeExamanSeeder::class,
            OrdonnanceSeeder::class,
            RoleSeeder::class,
            TraitementSeeder::class,
            // ExamanSeeder::class,
            InterventionSeeder::class,
            SymptomeSeeder::class,

        ]);
    }
}
