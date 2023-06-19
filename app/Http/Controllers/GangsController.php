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
        $envoiBDD = $request->validate([
            'nom' => 'required|max:50',
            'historique' => 'required|max:500',
            'localisation' => 'required|max:100',
        ]);

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
        $gang = Gangs::find($id);

        return view('admin.gangs.show', compact('gang',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $gang = Gangs::find($id);
        $gang->nom = $request->get('nom');
        $gang->historique = $request->get('historique');
        $gang->localisation = $request->get('localisation');

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
        $gang = Gangs::find($id);
        $gang->delete();

        return redirect('/gangs-admin')->with('success', 'Bande supprimée avec succès');
    }
}
