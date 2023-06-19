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
        $envoiBDD = $request->validate([
            'prenom' => 'required|max:50',
            'nom' => 'required|max:50',
            'age' => 'required|integer',
            'biographie' => 'required|max:500',
            'gang_id' => 'required|integer',
        ]);

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
        $personnage = Personnages::find($id);
        $personnage->prenom = $request->get('prenom');
        $personnage->nom = $request->get('nom');
        $personnage->age = $request->get('age');
        $personnage->biographie = $request->get('biographie');
        $personnage->gang_id = $request->get('gang_id');

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
        $personnage = Personnages::find($id);
        $personnage->delete();

        return redirect('/personnages-admin')->with('success', 'Personnage supprimé avec succès');
    }
}
