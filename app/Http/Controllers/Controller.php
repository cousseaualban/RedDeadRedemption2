<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Gangs;
use App\Models\Personnages;
use App\Models\Regions;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getOne()
    {
        $region = Regions::find(1);
        $personnage = Personnages::find(1);
        $gang = Gangs::find(1);
        $article = Articles::find(1);

        return view('home', compact('region', 'personnage', 'gang', 'article'));
    }
    public function charactersIndex(Request $request)
    {
        $personnagesPrincipaux = [];
        $personnagesSecondaires = [];

        if ($request->has('type') && $request->type === 'principal') {
            $personnagesPrincipaux = Personnages::where('type', 'principal')->orderBy('nom')->get();
        } elseif ($request->has('type') && $request->type === 'secondaire') {
            $personnagesSecondaires = Personnages::where('type', 'secondaire')->orderBy('nom')->get();
        } else {
            $personnagesPrincipaux = Personnages::where('type', 'principal')->orderBy('nom')->get();
            $personnagesSecondaires = Personnages::where('type', 'secondaire')->orderBy('nom')->get();
        }

        return view('front.personnages', compact('personnagesPrincipaux', 'personnagesSecondaires'));
    }

    public function gangsIndex(Request $request){
        $gangs = Gangs::all();

        return view('front.gangs', compact('gangs'));
    }
}
