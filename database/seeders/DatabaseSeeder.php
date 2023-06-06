<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(PersonnagesSeeder::class);
        $this->call(VillesSeeder::class);
        $this->call(GangsSeeder::class);
    }
}