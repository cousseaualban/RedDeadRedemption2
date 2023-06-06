<?php

namespace Database\Seeders;

use App\Models\Gangs;
use Illuminate\Database\Seeder;

class GangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Gangs::find(1) === null) {
            Gangs::firstOrCreate([
                'id' => 1,
                'nom' => 'La bande de Dutch',
                'localisation' => 'En mouvement constamment',
            ]);
        }
    }
}
