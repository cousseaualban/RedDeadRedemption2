<?php

use Carbon\Carbon;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suivez l'actualité autour de la franchise Red Dead Redemption">
    <title>L'actualité RED DEAD</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/blog.scss', 'resources/css/blog.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/univers-condensed-2" rel="stylesheet">
</head>

<body>

    <!-- Composant Header -->
    <x-header></x-header>

    <section class="blog">
        <div class="hero"></div>
        <h1><b>RED DEAD REDEMPTION 2</b></h1>
        <h2><b>L'actualité RED DEAD</b></h2>

        <div class="articles">
            @foreach($articles as $article)
            <div class="unArticle">
                <div class="image-container">
                    <img src="{{asset('/storage/images/articles/'.$article['image'])}}" class="card-img-top" alt="Photo article" />
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{$article->titre}}</h3>
                    <hr>
                    <p>Date de l'article : <?= Carbon::createFromFormat('Y-m-d H:i:s', $article->dateArticle)->format('d/m/Y'); ?></p>
                    <p>Auteur : {{$article->auteur}}</p>
                    <hr>
                    <button><a href="{{ route('front.unArticle', ['id' => $article->id]) }}">Voir l'article </a><i class="fa fa-arrow-right"></i></button>
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