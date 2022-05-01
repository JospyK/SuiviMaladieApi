<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
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
            ListeMaladieSeeder::class,
            SymptomeSeeder::class,

        ]);
    }
}
