<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Gangs;
use App\Models\Personnages;
use App\Models\Regions;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getOne()
    {
        $region = Regions::find(1);
        $personnage = Personnages::find(1);
        $gang = Gangs::find(1);
        $article = Articles::find(1);

        return view('home', compact('region', 'personnage', 'gang', 'article'));
    }
}
