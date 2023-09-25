<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apprenez-en plus sur l'origine des gangs présents dans Red Dead Redemption 2, de la bande de Dutch à celle des O'Driscoll.">
    <title>Les gangs</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/gangs.scss', 'resources/css/gangs.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/univers-condensed-2" rel="stylesheet">
</head>

<body>
    <!-- Composant Header -->
    <x-header></x-header>

    <section class="gangs">
        <div class="hero"></div>
        <h1><b>RED DEAD REDEMPTION 2</b></h1>
        <h2><b>Les gangs</b></h2>
        <div class="affichage">
            @foreach($gangs as $index => $gang)
            <div class="gang-container @if($index % 2 == 1) reversed @endif">
                <img src="{{asset('/storage/images/gangs/'.$gang->image)}}" class="card-img-top" alt="Photo du personnage" />
                <div class="leGang">
                    <h2><b>{{$gang->nom}}</b></h2>
                    <p>{{$gang->historique}}</p>
                    <p>Localisation : {{$gang->localisation}}</p>
                </div>
            </div>
            <hr>
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