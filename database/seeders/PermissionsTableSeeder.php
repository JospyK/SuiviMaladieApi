<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'symptome_create',
            ],
            [
                'id'    => 18,
                'title' => 'symptome_edit',
            ],
            [
                'id'    => 19,
                'title' => 'symptome_show',
            ],
            [
                'id'    => 20,
                'title' => 'symptome_delete',
            ],
            [
                'id'    => 21,
                'title' => 'symptome_access',
            ],
            [
                'id'    => 22,
                'title' => 'traitement_create',
            ],
            [
                'id'    => 23,
                'title' => 'traitement_edit',
            ],
            [
                'id'    => 24,
                'title' => 'traitement_show',
            ],
            [
                'id'    => 25,
                'title' => 'traitement_delete',
            ],
            [
                'id'    => 26,
                'title' => 'traitement_access',
            ],
            [
                'id'    => 27,
                'title' => 'liste_examan_create',
            ],
            [
                'id'    => 28,
                'title' => 'liste_examan_edit',
            ],
            [
                'id'    => 29,
                'title' => 'liste_examan_show',
            ],
            [
                'id'    => 30,
                'title' => 'liste_examan_delete',
            ],
            [
                'id'    => 31,
                'title' => 'liste_examan_access',
            ],
            [
                'id'    => 32,
                'title' => 'consultation_create',
            ],
            [
                'id'    => 33,
                'title' => 'consultation_edit',
            ],
            [
                'id'    => 34,
                'title' => 'consultation_show',
            ],
            [
                'id'    => 35,
                'title' => 'consultation_delete',
            ],
            [
                'id'    => 36,
                'title' => 'consultation_access',
            ],
            [
                'id'    => 37,
                'title' => 'ordonnance_create',
            ],
            [
                'id'    => 38,
                'title' => 'ordonnance_edit',
            ],
            [
                'id'    => 39,
                'title' => 'ordonnance_show',
            ],
            [
                'id'    => 40,
                'title' => 'ordonnance_delete',
            ],
            [
                'id'    => 41,
                'title' => 'ordonnance_access',
            ],
            [
                'id'    => 42,
                'title' => 'examan_create',
            ],
            [
                'id'    => 43,
                'title' => 'examan_edit',
            ],
            [
                'id'    => 44,
                'title' => 'examan_show',
            ],
            [
                'id'    => 45,
                'title' => 'examan_delete',
            ],
            [
                'id'    => 46,
                'title' => 'examan_access',
            ],
            [
                'id'    => 47,
                'title' => 'intervention_create',
            ],
            [
                'id'    => 48,
                'title' => 'intervention_edit',
            ],
            [
                'id'    => 49,
                'title' => 'intervention_show',
            ],
            [
                'id'    => 50,
                'title' => 'intervention_delete',
            ],
            [
                'id'    => 51,
                'title' => 'intervention_access',
            ],
            [
                'id'    => 52,
                'title' => 'hospitalisation_create',
            ],
            [
                'id'    => 53,
                'title' => 'hospitalisation_edit',
            ],
            [
                'id'    => 54,
                'title' => 'hospitalisation_show',
            ],
            [
                'id'    => 55,
                'title' => 'hospitalisation_delete',
            ],
            [
                'id'    => 56,
                'title' => 'hospitalisation_access',
            ],
            [
                'id'    => 57,
                'title' => 'liste_maladie_create',
            ],
            [
                'id'    => 58,
                'title' => 'liste_maladie_edit',
            ],
            [
                'id'    => 59,
                'title' => 'liste_maladie_show',
            ],
            [
                'id'    => 60,
                'title' => 'liste_maladie_delete',
            ],
            [
                'id'    => 61,
                'title' => 'liste_maladie_access',
            ],
            [
                'id'    => 62,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
