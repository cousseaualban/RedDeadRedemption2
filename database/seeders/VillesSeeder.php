<?php

namespace Database\Seeders;

use App\Models\Villes;
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
        $villes = ['Valentine', 'Strawberry', 'Rhodes', 'Saint-Denis', 'Annesburg', 'Grizzlies'];
        foreach($villes as $ville){
            Villes::firstOrCreate([
                'capitale' => $ville,
            ]);
        }
    }
}
