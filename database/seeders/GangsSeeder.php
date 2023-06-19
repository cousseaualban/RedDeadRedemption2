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
                'historique' => 'En 1878, Dutch van der Linde fonde, avec Hosea Matthews, sa propre bande alors que les deux hommes viennent de se rencontrer. Quelques mois plus tard, en 1879, ils recueillent un orphelin, Arthur Morgan, alors âgé de 16 ans. Ils lui apprennent à lire, écrire, à tirer et à monter à cheval avant de faire la même chose en 1885, lorsqu\'ils prennent sous leurs ailes un autre orphelin, John Marston.',
                'localisation' => 'En mouvement constamment',
            ]);
        }
    }
}
