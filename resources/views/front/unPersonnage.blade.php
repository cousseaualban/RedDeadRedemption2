<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$unPersonnage->prenom}} {{$unPersonnage->nom}}</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/unPersonnage.scss', 'resources/css/unPersonnage.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
</head>

<body>
    <!-- Composant Header -->
    <x-header></x-header>

    <!-- Section un personnage -->
    <section class="unPersonnage">
        <h1><b>{{$unPersonnage->prenom}} {{$unPersonnage->nom}}</b></h1>
        <div class="lePersonnage">
            <div class="image-container">
                <img src="{{asset('/storage/images/personnages/'.$unPersonnage['image'])}}" alt="Photo du personnage">
            </div>
            <div class="details">
                <p class="label"><b>Age du personnage : </b></p>
                <p class="content">{{$unPersonnage->age}}</p>
                <hr>
                <p class="label"><b>Biographie du personnage : </b></p>
                <p class="content">{{$unPersonnage->biographie}}</p>
                <hr>
                <p class="label"><b>Gang du personnage : </b></p>
                <p class="content">{{$unPersonnage->gang->nom}}</p>
                <hr>
                <button><a href="/les-personnages">Voir les autres personnages</a></button>
            </div>
        </div>
    </section>

    <!-- Bouton toTop -->
    @component('components.toTop')
    @endcomponent
    <!-- Fin bouton toTop -->


    <!-- Composant Footer -->
    <x-footer></x-footer>
</body>

</html>