<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactez-nous</title>
    <link rel="icon" type="image/png" href="/vendor/assets/rockstar.jpg" sizes="32x32">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    @vite(['resources/sass/contact.scss', 'resources/css/contact.css'])
    <!-- Script pour le bouton toTop -->
    @vite(['resources/js/toTop.js'])
</head>

<body>

    <!-- Composant Header -->
    <x-header></x-header>

    <!-- Formulaire de contact -->
    <div class="hero"></div>
    <h1><b>RED DEAD REDEMPTION 2</b></h1>
    <h2><b>Contact</b></h2>
    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Restons en contact</h3>
                <p class="text">N'hésitez pas à nous contacter pour toutes informations sur le site afin de résoudre quelconques problèmes s'il y en a.</p>

                <div class="info">
                    <div class="information">
                        <i class="fa fa-map-pin"></i>
                        <p>20 rue Pierre Bacqua, 85000 La Roche sur Yon</p>
                    </div>
                    <div class="information">
                        <i class="fa fa-envelope"></i>
                        <p>cousseaualban@gmail.com</p>
                    </div>
                    <div class="information">
                        <i class="fa fa-phone"></i>
                        <p>02 51 12 25 66</p>
                    </div>

                    <div class="social-media">
                        <p>Connectez-vous avec nous</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/reddeadredemption"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/@RockstarGames"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.instagram.com/reddead_redemption2/?hl=fr"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                @if(Session::has('message_envoye'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message_envoye')}}
                </div>
                @endif
                <form method="POST" action="{{route('contact.envoi')}}" enctype="multipart/form-data">
                    @csrf
                    <h3 class="title">Contactez-nous !</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" aria-label="Saisir votre nom / prénom">
                        <label for="">Nom / Prénom</label>
                        <span>Nom / Prénom</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" aria-label="Saisir votre adresse mail">
                        <label for="">Adresse mail</label>
                        <span>Adresse mail</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" aria-label="Saisir votre n° de téléphone">
                        <label for="">N° de téléphone</label>
                        <span>N° de téléphone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input" aria-label="Ecrire votre message"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Envoyer" class="btn" />
                </form>
            </div>
        </div>
    </div>
    <div class="backgroundEntreprise"><iframe title="Carte localisation société Yellow Network" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.42618958495!2d-1.4399262232203345!3d46.67758885166657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48042555dcf502a3%3A0xdc43a33df073e0f2!2sARINFO%20La%20Roche-sur-Yon!5e0!3m2!1sfr!2sfr!4v1693313744721!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Bouton toTop -->
    @component('components.toTop')
    @endcomponent
    <!-- Fin bouton toTop -->

    <!-- Script formulaire de contact -->
    @vite(['resources/js/contact.js'])

    <!-- Composant Footer -->
    <x-footer></x-footer>
</body>