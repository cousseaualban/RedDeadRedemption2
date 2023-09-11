<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="N'hésitez pas à nous contacter via notre formulaire afin d'obtenir d'autres informations complétementaires. ">
    <title>Mentions légales</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/mentionslegales.scss', 'resources/css/mentionslegales.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/univers-condensed-2" rel="stylesheet">
</head>

<body>
    <!-- Composant Header -->
    <x-header></x-header>

    <section class="mentionsLegales">
        <h1>Mentions légales</h1>

        <div class="contenu">
            <h2>MENTIONS LÉGALES</h2>
            <p>Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en l’économie numérique, il est précisé aux utilisateurs du site NBA l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
            <h2>Edition du site</h2>
            <p>Le présent site, accessible à l’URL albancousseau-arinfo.fr (le « Site »), est édité par :
                Alban COUSSEAU, résidant 20 rue Pierre Bacqua, 85000 La Roche sur Yon, de nationalité Française (France), né(e) le 27/08/2002,</p>
            <h2>Hébergement</h2>
            <p>Le Site est hébergé par la société 1&1 / IONOS, situé 7 Place de la Gare – 57200 Sarreguemines, (contact téléphonique ou email : (+33) 9 70 80 89 11).</p>
            <h2>Directeur de publication</h2>
            <p>Le Directeur de la publication du Site est Alban COUSSEAU.</p>
            <h2>Nous contacter</h2>
            <p>Par téléphone : +33964124145
                Par email : cousseaualban@gmail.com
                Par courrier : 20 Rue Pierre Bacqua, 85000 La Roche sur Yon</p>
            <h2>Données personnelles</h2>
            <p>Le traitement de vos données à caractère personnel est régi par notre Charte du respect de la vie privée, disponible depuis la section « Charte de Protection des Données Personnelles », conformément au Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016 («RGPD»).</p>
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