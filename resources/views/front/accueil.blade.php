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
    @vite(['resources/sass/accueil.scss', 'resources/css/accueil.css'])

</head>

<body>
    <!-- Section Header -->
    <header>
        <nav>
            <img src="/vendor/assets/logo.png" alt="Logo Red Dead Redemeption 2">
            <div id="mesLiens">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Histoire</a></li>
                    <li><a href="#">Détails <i class="fa fa-chevron-down"></i></a>
                        <ul class="details">
                            <li><a href="#">Les personnages</a></li>
                            <li><a href="#">Les gangs</a></li>
                            <li><a href="#">Les régions</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Fin section Header -->

    <!-- Début section Hero -->
    <section class="hero">
        <div class="video-container">
            <video autoplay loop muted plays-inline class="video">
                <source src="/vendor/assets/video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="titre">
            <h1>RED DEAD REDEMPTION 2</h1>
            <h2>Hors-la-loi à vie...</h2>
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
            <button><a href="#"><b>L'Histoire</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/personnages.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="#"><b>Les Personnages</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/gang.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="#"><b>Les Gangs</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/regions.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="#"><b>Les Régions</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/blog.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="#"><b>Notre Blog</b></a></button>
        </div>

        <div class="uneRubrique">
            <div class="image-container">
                <img src="/vendor/assets/contact.jpg" alt="Photo vers page Histoire">
            </div>
            <button><a href="#"><b>Contact</b></a></button>
        </div>
    </section>
    <!-- Fin section rubriques -->

    <!-- Début section footer -->
    <footer class="footer">
        <div class="nav">
            <img src="/vendor/assets/logo.png" alt="Logo Red Dead Redemeption 2">
            <div class="coordonnees">

                <div class="uneCoordonnee">
                    <i class="fa fa-map-pin"></i>
                    <p>85000, La Roche sur Yon</p>
                </div>

                <div class="uneCoordonnee">
                    <i class="fa fa-envelope"></i>
                    <p>cousseaualban@gmail.com</p>
                </div>

                <div class="uneCoordonnee">
                    <i class="fa fa-phone"></i>
                    <p>02 44 23 82 15 </p>
                </div>

            </div>

            <div class="liensAnnexes">
                <p><a href="#">Mentions Légales</a></p>
                <p><a href="#">Politique de confidentialié</a></p>
                <p><a href="#">Contact</a></p>
            </div>
        </div>
        <hr>
        <div class="reseauxSociaux">
            <i class="fa fa-instagram"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-youtube"></i>
        </div>
    </footer>
    <!-- Fin section footer -->
</body>

</html>