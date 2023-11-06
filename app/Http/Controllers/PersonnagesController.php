<?php

namespace App\Http\Controllers;

use App\Models\Personnages;
use App\Models\Gangs;
use Illuminate\Http\Request;


class PersonnagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Récupérer dans la table personnages l'ensemble des données */

        $personnages = Personnages::all();

        return view('admin.personnages.index', compact('personnages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Renvoie la vue create contenant le formulaire de création */
        /* On récupère également l'ensemble des gangs car on a un personnage est affecté à un gang */

        $gangs = Gangs::all();
        return view('admin.personnages.create', compact('gangs'));
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
                'prenom' => 'required|max:50',
                'nom' => 'required|max:50',
                'age' => 'required|integer',
                'biographie' => 'required|max:500',
                'type' => 'required|max:100',
                'gang_id' => 'required|integer',
            ],
            [
                'prenom.required' => 'Le champ Prénom du personnage est obligatoire',
                'nom.required' => 'Le champ Nom du personnage est obligatoire',
                'image.required' => 'Le champ Photo du personnage est obligatoire',
                'age.required' => 'Le champ Age du personnage est obligatoire',
                'biographie.required' => 'Le champ Biographie du personnage est obligatoire',
                'type.required' => 'Le champ Personnage principal / secondaire ? est obligatoire',
                'gang_id.required' => 'Le champ Sa bande est obligatoire',
            ]
        );

        /* Conditions permettant de stocker mes images dans le dossier public/images/personnages lors de la création d'un personnage */
        if ($request->hasFile('image')) {
            $chemin_destination = 'public/images/personnages';
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $chemin = $request->file('image')->storeAs($chemin_destination, $nom_image);

            $envoiBDD['image'] = $nom_image;
        }

        Personnages::create($envoiBDD);

        return redirect('/personnages-admin')->with('success', 'Personnage créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* Renvoie la vue d'affichage d'un personnage en fonction de l'ID du personnage */
        $personnage = Personnages::find($id);

        return view('admin.personnages.show', compact('personnage',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* Récupère l'ID d'un personnage et renvoie l'utilisateur vers la vue de modification d'un personnage */

        $gangs = Gangs::all();
        $personnage = Personnages::find($id);

        return view('admin.personnages.edit', compact('personnage', 'gangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* Méthode permettant de récupérer les données du personnage et d'enregistrer la ou les modifications apportées */

        $personnage = Personnages::find($id);
        $personnage->prenom = $request->get('prenom');
        $personnage->nom = $request->get('nom');
        $personnage->age = $request->get('age');
        $personnage->biographie = $request->get('biographie');
        $personnage->type = $request->get('type');
        $personnage->gang_id = $request->get('gang_id');

        [
            'prenom.required' => 'Le champ Prénom du personnage est obligatoire',
            'nom.required' => 'Le champ Nom du personnage est obligatoire',
            'image.required' => 'Le champ Photo du personnage est obligatoire',
            'age.required' => 'Le champ Age du personnage est obligatoire',
            'biographie.required' => 'Le champ Biographie du personnage est obligatoire',
            'type.required' => 'Le champ Personnage principal / secondaire ? est obligatoire',
            'gang_id.required' => 'Le champ Sa bande est obligatoire',
        ];

        /* Conditions permettant de remplacer l'image initialement choisie par une nouvelle */
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $destination = public_path('storage/images/personnages');
            $image->move($destination, $nom_image);
            $personnage->image = $nom_image;
        }

        $personnage->save();

        return redirect('/personnages-admin')->with('success', 'Personnage modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Supprime le personnage sélectionné */
        $personnage = Personnages::find($id);
        $personnage->delete();

        return redirect('/personnages-admin')->with('success', 'Personnage supprimé avec succès');
    }
}
