<?php

use Carbon\Carbon;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $unArticle['titre'] ?>, rédigé le : <?= Carbon::createFromFormat('Y-m-d H:i:s', $unArticle->dateArticle)->locale('fr')->isoFormat('D MMMM YYYY'); ?>, Auteur : <?= $unArticle->author ?> [...]">
    <title>{{$unArticle->titre}}</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/unArticle.scss', 'resources/css/unArticle.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/univers-condensed-2" rel="stylesheet">
</head>

<body>

    <!-- Composant Header -->
    <x-header></x-header>

    <section class="unArticle">
        <h1><b>{{$unArticle->titre}}</b></h1>
        <div class="infoArticle">
            <h2><b>Rédigé le : <?= Carbon::createFromFormat('Y-m-d H:i:s', $unArticle->dateArticle)->locale('fr')->isoFormat('D MMMM YYYY'); ?></b></h2>
            <h2><b>Auteur : {{$unArticle->auteur}}</b></h2>
        </div>
        <div class="contenu">
            <div class="image-container">
                <img src="{{asset('/storage/images/articles/'.$unArticle['image'])}}" alt="Photo article" />
            </div>
            <p>{{$unArticle->contenu}}</p>
        </div>
    </section>

    <!-- Bouton toTop -->
    @component('components.toTop')
    @endcomponent
    <!-- Fin bouton toTop -->


    <!-- Composant Footer -->
    <x-footer></x-footer>
</body>