<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Dead Redemption 2</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/histoire.scss', 'resources/css/histoire.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
</head>

<body>
    <!-- Composant Header -->
    <x-header></x-header>

    <section class="histoire">
        <div class="hero">
        </div>
        <h1>RED DEAD REDEMPTION 2</h1>
        <h2>L'histoire d'un héros malgré lui</h2>
        <div class="extrait">
            <div class="image-container"> 
                <img src="/vendor/assets/histoire1.jpg" alt="Photo histoire 1 RDR2">
            </div>
            <p>Amérique, 1899. L'ère de l'Ouest sauvage touche à sa fin.
                Suite à un braquage qui a mal tourné dans la ville de
                Blackwater, Arthur Morgan et le reste des hors-la-loi de la
                bande de Dutch van der Linde doivent prendre la fuite vers
                l'est. Les agents fédéraux et les meilleurs chasseurs de
                primes du pays se mettent à leurs trousses et la bande commet
                méfaits sur méfaits dans les vastes terres sauvages de l'Amérique dans un seul et unique but :
                survivre. Alors que des querelles internes menacent de faire voler la
                bande en éclats, Arthur est tiraillé entre ses propres idéaux et sa
                loyauté envers la bande qui l'a élevé.
            </p>
        </div>

        <div class="extrait-inverse">
            <div class="image-container"> 
                <img src="/vendor/assets/histoire2.jpg" alt="Photo histoire 2 RDR2">
            </div>
            <p>Le joueur incarne Arthur Morgan, un membre de longue date du gang de
                Van der Linde. Le gang est mené par Dutch van der Linde et est notamment
                composé d'Hosea Matthews, un escroc ainsi que l'ami le plus proche et le
                bras droit de Dutch depuis plus de 20 ans ; John Marston, le protagoniste
                de Red Dead Redemption sa compagne Abigail Roberts et son fils
                Jack Marston, « l'Oncle » Bill Williamson, Javier Escuella, Micah Bell,
                Charles Smith, un américain d’origine chasseur ; ainsi que Sadie Adler,
                une femme au foyer qui rejoint le gang après la mort de son mari par le
                gang des O'Driscoll.
            </p>
        </div>

        <div class="extrait">
            <div class="image-container">
                <img src="/vendor/assets/histoire3.jpg" alt="Photo histoire 3 RDR2">
            </div>
            <p>Par les créateurs de Grand Theft Auto V et Red Dead Redemption, Red Dead Redemption 2 raconte une histoire épique au cœur de l'Amérique à l'aube de l'ère moderne. Disponible maintenant sur PlayStation 4 et Xbox One.
                Red Dead Redemption 2 sort sur PC le 5 novembre, et de nombreux bonus
                spéciaux attendront les joueurs qui auront pré-acheté le jeu via le
                Rockstar Game Launcher à partir du 9 octobre. Plus d'informations ici.
            </p>
        </div>
    </section>

    <!-- Bouton toTop -->
    @component('components.toTop')
    @endcomponent
    <!-- Fin bouton toTop -->

    <!-- Composant Footer -->
    <x-footer></x-footer>
</body>