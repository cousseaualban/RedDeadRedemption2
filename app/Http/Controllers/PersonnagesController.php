<?php

namespace App\Http\Controllers;

use App\Models\Personnages;
use App\Http\Requests\UpdatePersonnagesRequest;
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
     * @param  \App\Models\Personnages  $personnages
     * @return \Illuminate\Http\Response
     */
    public function show(Personnages $personnages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnages  $personnages
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnages $personnages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonnagesRequest  $request
     * @param  \App\Models\Personnages  $personnages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonnagesRequest $request, Personnages $personnages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personnages  $personnages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnages $personnages)
    {
        //
    }
}
