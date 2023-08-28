<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRegionsRequest;
use App\Models\Villes;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Récupérer dans la table régions l'ensemble des données */ 
        $regions = Regions::all();
        return view('admin.regions.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Renvoie la vue create contenant le formulaire de création */
        /* On récupère également l'ensemble des villes car une ville est affecté à une région */

        $villes = Villes::all();
        return view('admin.regions.create', compact('villes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Méthode d'envoi des données saisies dans le formulaire de création vers la base de données */
        $envoiBDD = $request->validate([
            'nom'=> 'required|max:50',
            'description' => 'required|max:2000',
            'ville_id' => 'required|integer',
        ]);

        /* Conditions permettant de stocker mes images dans le dossier public/images/regions lors de la création de la région */

        if ($request->hasFile('image')) {
            $chemin_destination = 'public/images/regions';
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $chemin = $request->file('image')->storeAs($chemin_destination, $nom_image);

            $envoiBDD['image'] = $nom_image;
        }

        Regions::create($envoiBDD);

        return redirect('regions-admin')->with('success', 'Région ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* Renvoie la vue d'affichage d'une région en fonction de l'ID de la région */
        $region = Regions::find($id);

        return view('admin.regions.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* Récupère l'ID d'une région et renvoie l'utilisateur vers la vue de modification d'une région */
        $villes = Villes::all();
        $region = Regions::find($id);

        return view('admin.regions.edit', compact('region', 'villes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* Méthode permettant de récupérer les données du gang et d'enregistrer la ou les modifications apportées */
        $region = Regions::find($id);
        $region->nom = $request->get('nom');
        $region->description = $request->get('description');
        $region->ville_id = $request->get('ville_id');

        /* Conditions permettant de remplacer l'image initialement choisie par une nouvelle */
        if($request->hasFile('image')){
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $destination = public_path('storage/images/regions');
            $image->move($destination, $nom_image);
            $region->image = $nom_image;
        }

        $region->save();

        return redirect('/regions-admin')->with('success', 'Région modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Supprime la région sélectionnée */
        $region = Regions::find($id);
        $region->delete();

        return redirect('/regions-admin')->with('success', 'Région supprimée avec succès');
    }
}
