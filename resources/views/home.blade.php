@extends('adminlte::page')

@section('title', 'Red Dead Redemption 2')

@section('content_header')
<h1 class="m-0 text-dark">Back-Office Red Dead Redemption 2</h1>
@stop

@section('content')

<div class="row">
    <div class="col-6">
        <div class="card text-center">
            <div class="card-header">
                <h1><strong>Page d'accueil</strong></h1>
            </div>
            <div class="card-body">
                <img src="vendor/adminlte/dist/img/logo.png" class="card-img" alt="Logo Red Dead Redemption">
                <hr>
                <p class="card-text">Amérique, 1899. L'ère de l'Ouest sauvage touche à sa fin. Suite à un braquage qui a mal tourné dans la ville de Blackwater, Arthur Morgan et le reste des hors-la-loi de la bande de Dutch van der Linde doivent prendre la fuite vers l'est.[...]</p>
            </div>
            <div class="card-footer">
                <a href="/" class="btn btn-dark">Présentation</a>
            </div>
        </div>
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    <h1><strong>Régions Red Dead Redemption 2</strong></h1>
                </div>
                <div class="card-body">
                    @if($region)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nom de la région</td>
                                <td>Photo</td>
                                <td>Capitale de la région</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{$region->id}}</td>
                                <td>{{$region->nom}}</td>
                                <td><img height="100vh" src="{{asset('/storage/images/regions/'.$region->image)}}" /></td>
                                <td>{{$region->ville->capitale}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                    <p>Aucune région n'a été trouvé.</p>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="/regions-admin" class="btn btn-dark">Voir toutes les régions</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card text-center">
            <div class="card-header">
                <h1><strong>L'actualité Red Dead Redemption 2</strong></h1>
            </div>
            <div class="card-body">
                @if($article)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Titre de l'article</td>
                            <td>Photo</td>
                            <td>Auteur</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->titre}}</td>
                            <td><img height="100vh" src="{{asset('/storage/images/articles/'.$article->image)}}" /></td>
                            <td>{{$article->auteur}}</td>
                        </tr>
                    </tbody>
                </table>
                @else
                <p>Aucun article n'a été trouvé.</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/articles-admin" class="btn btn-dark">Accéder aux articles</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-header">
                <h1><strong>Personnages Red Dead Redemption 2</strong></h1>
            </div>
            <div class="card-body">
                @if($personnage)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nom / Prénom</td>
                            <td>Photo</td>
                            <td>Age</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$personnage->id}}</td>
                            <td>{{$personnage->nom}} {{$personnage->prenom}}</td>
                            <td><img height="100vh" src="{{asset('/storage/images/personnages/'.$personnage->image)}}" /></td>
                            <td>{{$personnage->age}}</td>
                        </tr>
                    </tbody>
                </table>
                @else
                <p>Aucun personnage n'a été trouvé.</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/personnages-admin" class="btn btn-dark">Voir tous les personnages</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-header">
                <h1><strong>Gangs Red Dead Redemption 2</strong></h1>
            </div>
            <div class="card-body">
                @if($gang)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nom de la bande</td>
                            <td>Photo</td>
                            <td>localisation</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$gang->id}}</td>
                            <td>{{$gang->nom}}</td>
                            <td><img height="100vh" src="{{asset('/storage/images/gangs/'.$gang->image)}}" /></td>
                            <td>{{$gang->localisation}}</td>
                        </tr>
                    </tbody>
                </table>
                @else
                <p>Aucun personnage n'a été trouvé.</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/gangs-admin" class="btn btn-dark">Voir tous les gangs</a>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <div class="card text-center">
            <div class="card-header">
                <h1><strong>Contactez-nous !</strong></h1>
            </div>
            <div class="card-body">
                <p>N'hésitez pas à nous contacter si vous avez des questions concernant le site, des bugs à corriger...</p>
                <a href="/contact" class="btn btn-dark">Nous contacter</a>
            </div>
        </div>
    </div>

</div>
<hr>
<div class="d-flex justify-content-center" style="width: 100%;">
    <div class="col-3 text-center" style="width: 50%;">
        <p><b>Ecole Numérique Arinfo</b></p>
        <p>20 rue Pierre Bacqua</p>
        <p>85000 La Roche sur Yon</p>
        <p><i class="fas fa-fw fa-phone"></i> 02 44 23 82 15</p>
    </div>

    <div class="col-3 text-center" style="width: 50%;">
        <p><a href="/sitemap">Plan du site</a></p>
        <p><a href="/mentions-légales">Mentions légales</a></p>
        <p><a href="/politique-de-confidentialite">Politique de confidentialité</a></p>
    </div>
</div>
@stop