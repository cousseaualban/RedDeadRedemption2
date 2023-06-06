<?php

namespace Database\Seeders;

use App\Models\Personnages;
use Illuminate\Database\Seeder;

class PersonnagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Personnages::find(1) === null) {
            Personnages::firstOrCreate([
                'id' => 1,
                'prenom' => 'Arthur',
                'nom' => 'Morgan',
                'age' => 36,
                'biographie' => 'Personnage principal de Red Dead Redemption 2 et bras droit de Dutch Van Der Linde, Arthur Morgan est un hors-la-loi rêvant, comme tous ses « frères d’armes », de liberté et de richesse. Mais les mois passent et Arthur se rend compte que ce n’est pas ça, le plus important.',
                'gang_id' => 1,
            ]);
        }
    }
}
