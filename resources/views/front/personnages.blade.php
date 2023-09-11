<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Découvrez les différents personnages présents dans le jeu Red Dead Redemption 2, qu'ils soient principaux ou secondaires.">
    <title>Les personnages</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/personnages.scss', 'resources/css/personnages.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/univers-condensed-2" rel="stylesheet">
</head>

<body>
    <!-- Composant Header -->
    <x-header></x-header>

    <section class="personnages">
        <div class="hero"></div>
        <h1><b>RED DEAD REDEMPTION 2</b></h1>
        <h2><b>Les personnages</b></h2>
        <div class="boutonsFiltre">
            <button class="filtre"><a href="#principaux">Personnages principaux</a></button>
            <button class="filtre"><a href="#secondaire">Personnages secondaires</a></button>
        </div>

        <h3 id="principaux"><b>Les personnages principaux</b></h3>
        <div class="cartesPersonnages">
            @foreach($personnagesPrincipaux as $personnagePrincipal)
            <div class="card">
                <div class="image-container">
                    <img src="{{asset('/storage/images/personnages/'.$personnagePrincipal->image)}}" class="card-img-top" alt="Photo du personnage" />
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>{{$personnagePrincipal->prenom}} {{$personnagePrincipal->nom}}</b></h4>
                    <p>Age : {{$personnagePrincipal->age}}</p>
                    <p>Biographie : {{ substr($personnagePrincipal->biographie, 0, 100) }}[...]</p>
                    <p>Sa bande : {{$personnagePrincipal->gang->nom}}</p>
                    <hr>
                    <button><a href="{{ route('front.unPersonnage', ['id' => $personnagePrincipal->id]) }}">Qui est {{$personnagePrincipal->prenom}} {{$personnagePrincipal->nom}} ? <i class="fa fa-arrow-right"></i></a></button>
                </div>
            </div>
            @endforeach
        </div>

        <h3 id="secondaire"><b>Les personnages secondaires</b></h3>
        <div class="cartesPersonnages">
            @foreach($personnagesSecondaires as $personnageSecondaire)
            <div class="card">
                <div class="image-container">
                    <img src="{{asset('/storage/images/personnages/'.$personnageSecondaire->image)}}" class="card-img-top" alt="Photo du personnage" />
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>{{$personnageSecondaire->prenom}} {{$personnageSecondaire->nom}}</b></h4>
                    <p>Age : {{$personnageSecondaire->age}}</p>
                    <p>Biographie : {{ substr($personnageSecondaire->biographie, 0, 100) }}[...]</p>
                    <p>Sa bande : {{$personnageSecondaire->gang->nom}}</p>
                    <hr>
                    <button><a href="{{ route('front.unPersonnage', ['id' => $personnageSecondaire->id]) }}">Qui est {{$personnageSecondaire->prenom}} {{$personnageSecondaire->nom}} ? <i class="fa fa-arrow-right"></i></a></button>
                </div>
            </div>
            @endforeach
        </div>


    </section>

    <!-- Bouton toTop -->
    @component('components.toTop')
    @endcomponent
    <!-- Fin bouton toTop -->

    <!-- Composant Footer -->
    <x-footer></x-footer>
</body>