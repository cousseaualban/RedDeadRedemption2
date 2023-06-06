<?php

namespace Database\Seeders;

use App\Models\Regions;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Regions::find(1) === null) {
            Regions::firstOrCreate([
                'id' => 1,
                'nom' => 'Les HeartLands',
                'description' => 'La région est connue pour ses plaines relativement verdoyantes, regorgeant d\'animaux sauvages (Cerf, lapin, chevaux...). L\'agriculture, en particulier l\'élevage de bétail, est très fructueuse sur cet état. Les Heartlands regorgent de collines, de petits forêts et de plaines ouvertes parsemées de ranchs et de petites fermes.
                Le climat des Heartlands est plutôt doux. Les conditions climatiques sont plutôt clémentes même si la pluie et les orages se produisent de manière occasionnelle.',
            ]);
        }
    }
}
