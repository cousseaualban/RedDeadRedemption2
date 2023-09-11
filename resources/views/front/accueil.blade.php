<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Red Dead Redemption 2, découvrez sur notre site l'histoire de ce jeu, les personnages centraux et secondaires, l'actu de la franchise et bien plus encore...">
    <title>Red Dead Redemption 2</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/accueil.scss', 'resources/css/accueil.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/univers-condensed-2" rel="stylesheet">
                              
</head>

<x-header></x-header>

<body>
    <!-- Début section Hero -->
    <section class="hero">
        <div class="video-container">
            <video autoplay loop muted plays-inline class="video">
                <source src="/vendor/assets/video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="titre">
            <h1><b>RED DEAD REDEMPTION 2</b></h1>
            <h2><b>Hors-la-loi à vie...</b></h2>
        </div>
    </section>
    <!-- Fin section hero -->

    <!-- Début section synopsis -->
    <section class="synopsis">
        <p>Amérique, 1899. L'ère de l'Ouest sauvage touche à sa fin. Suite à un braquage qui a mal tourné dans la ville de Blackwater, Arthur Morgan et
            le reste des hors-la-loi de la bande de Dutch van der Linde doivent prendre la fuite vers l'est. Les agents fédéraux et les meilleurs chasseurs de primes
            du pays se mettent à leurs trousses et la bande commet méfaits sur méfaits dans les vastes terres sauvages de l'Amérique dans un seul et unique but :
            survivre. Alors que des querelles internes menacent de faire voler la bande en éclats, Arthur est tiraillé entre ses propres idéaux et sa loyauté envers
            la bande qui l'a élevé.
        </p>
    </section>
    <!-- Fin section synopsis -->

    <!-- Début section rubriques -->
    <section class="rubriques">

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/histoire.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="/histoire"><b>L'Histoire</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/personnages.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="/les-personnages"><b>Les Personnages</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/gang.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="/les-gangs"><b>Les Gangs</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/regions.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="/les-regions"><b>Les Régions</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/blog.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="/blog"><b>Notre Blog</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/contact.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="/contact"><b>Contact</b></a></button>
        </div>
    </section>
    <!-- Fin section rubriques -->
    <!-- Bouton toTop -->
    @component('components.toTop')
    @endcomponent
    <!-- Fin bouton toTop -->

    <x-footer></x-footer>
</body>

</html>