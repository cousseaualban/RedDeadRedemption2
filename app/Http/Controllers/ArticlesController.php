<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Récupérer dans la table articles l'ensemble des données */

        $articles = Articles::all();

        return view('admin.articles.index', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Renvoie la vue create contenant le formulaire de création */
        return view('admin.articles.create');
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
            'titre' => 'required|max:200',
            'auteur' => 'required|max:50',
            'contenu' => 'required|max:5000',
            'dateArticle' => 'required|max:500',
        ]);

        /* Conditions permettant de stocker mes images dans le dossier public/images/articles lors de la création de l'article */
        if ($request->hasFile('image')) {
            $chemin_destination = 'public/images/articles';
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $chemin = $request->file('image')->storeAs($chemin_destination, $nom_image);

            $envoiBDD['image'] = $nom_image;
        }

        Articles::create($envoiBDD);

        return redirect('/articles-admin')->with('success', 'Article ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* Renvoie la vue d'affichage d'un article en fonction de l'ID de l'article */
        $article = Articles::find($id);

        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::find($id);

        return view('admin.articles.edit', compact('article'));
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
        /* Méthode permettant de récupérer les données de l'article et d'enregistrer la ou les modifications apportées */

        $article = Articles::find($id);
        $article->titre = $request->get('titre');
        $article->contenu = $request->get('contenu');
        $article->auteur = $request->get('auteur');
        $article->dateArticle = $request->get('dateArticle');

        /* Conditions permettant de remplacer l'image initialement choisie par une nouvelle */
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nom_image = $image->getClientOriginalName();
            $destination = public_path('storage/images/articles');
            $image->move($destination, $nom_image);
            $article->image = $nom_image;
        }

        $article->save();

        return redirect('/articles-admin')->with('success', 'Article modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Supprime l'article sélectionné */
        $article = Articles::find($id);
        $article->delete();
        
        return redirect('/articles-admin')->with('success', 'Article supprimé avec succès');
    }

}
