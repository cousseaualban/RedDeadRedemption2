<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'Editeur', 'Lecteur'];
        foreach ($roles as $role) {
            Role::firstOrCreate([
                'type' => $role,
                'user_id' => 1,
            ]);
        }
    }
}