<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (User::find(1) === null) {
            User::firstOrCreate([
                'id' => 1,
                'name' => 'AdminRDR2',
                'email' => 'admin-rdr2@gmail.com',
                'password' => Hash::make('adminRDR2'),
                'role_id' => 1
            ]);
        }
    }
}