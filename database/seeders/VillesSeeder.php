<?php

namespace Database\Seeders;

use App\Models\Villes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Villes::find(1) === null) {
            Villes::firstOrCreate([
                'id' => 1,
                'nom' => 'Valentine',
                'region_id' => 1,
            ]);
        }
    }
}
