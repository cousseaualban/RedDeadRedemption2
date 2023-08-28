<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les régions</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/regions.scss', 'resources/css/regions.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
</head>

<body>

    <!-- Composant Header -->
    <x-header></x-header>

    <!-- Section Régions -->
    <section class="regions">
        <div class="hero"></div>
        <h1><b>RED DEAD REDEMPTION 2</b></h1>
        <h2><b>Les régions</b></h2>
        <p>Découvrez quelques-unes des villes disséminées dans le vaste territoire de Red Dead Redemption 2.
            Traversez des environnements variés, des forêts de West Elizabeth aux
            montagnes d'Ambarino, en passant par les plaines de New Hanover ou les
            marais de Lemoyne.
        </p>

        <div class="uneRegion">
            @foreach($regions as $region)
            <div class="image-container-wrapper">
                <div class="image-container">
                    <img src="{{asset('/storage/images/regions/'.$region->image)}}" class="card-img-top" alt="Photo de la région" />
                </div>
                <div class="nomRegion">
                    <p class="nom"><b>{{$region->nom}}</b></p>
                    <p class="capitale"><b>{{$region->ville->capitale}}</b></p>
                </div>
            </div>
            <p class="description">{{$region->description}}</p>
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

</html>