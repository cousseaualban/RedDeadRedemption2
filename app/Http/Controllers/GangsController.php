<?php

namespace App\Http\Controllers;

use App\Models\Gangs;
use Illuminate\Http\Request;


class GangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Récupérer dans la table gangs l'ensemble des données */
        $gangs = Gangs::all();
        return view('admin.gangs.index', compact('gangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Renvoie la vue create contenant le formulaire de création */
        return view('admin.gangs.create');
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
        $envoiBDD = $request->validate(
            [
                'nom' => 'required|max:50',
                'historique' => 'required|max:500',
                'localisation' => 'required|max:100',
            ],
            [
                'nom.required' => 'Le champ Nom de la bande est obligatoire',
                'image.required' => 'Le champ Photo de la bande est obligatoire',
                'historique.required' => 'Le champ Histoire de la bande est obligatoire',
                'localisation.required' => 'Le champ Localisation de la bande est obligatoire',

            ]
        );

        /* Conditions permettant de stocker mes images dans le dossier public/images/gangs lors de la création d'un gang */
        if ($request->hasFile('image')) {
            $chemin_destination = 'public/images/gangs';
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $chemin = $request->file('image')->storeAs($chemin_destination, $nom_image);

            $envoiBDD['image'] = $nom_image;
        }
        Gangs::create($envoiBDD);

        return redirect('/gangs-admin')->with('success', 'Bande ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* Renvoie la vue d'affichage d'un gang en fonction de l'ID du gang */
        $gang = Gangs::find($id);

        return view('admin.gangs.show', compact('gang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* Récupère l'ID d'un gang et renvoie l'utilisateur vers la vue de modification d'un gang */
        $gang = Gangs::find($id);

        return view('admin.gangs.edit', compact('gang'));
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
        $gang = Gangs::find($id);
        $gang->nom = $request->get('nom');
        $gang->historique = $request->get('historique');
        $gang->localisation = $request->get('localisation');

        [
            'nom.required' => 'Le champ Nom de la bande est obligatoire',
            'image.required' => 'Le champ Photo de la bande est obligatoire',
            'historique.required' => 'Le champ Histoire de la bande est obligatoire',
            'localisation.required' => 'Le champ Localisation de la bande est obligatoire',

        ];

        /* Conditions permettant de remplacer l'image initialement choisie par une nouvelle */
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $destination = public_path('storage/images/gangs');
            $image->move($destination, $nom_image);
            $gang->image = $nom_image;
        }

        $gang->save();

        return redirect('/gangs-admin')->with('success', 'Bande modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Supprime le gang sélectionné */
        $gang = Gangs::find($id);
        $gang->delete();

        return redirect('/gangs-admin')->with('success', 'Bande supprimée avec succès');
    }
}
