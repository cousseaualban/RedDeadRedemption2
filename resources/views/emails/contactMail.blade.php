<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de contact</title>
</head>

<body>
    <h1>Message d'un utilisateur reçu</h1>
    <p>Nom / Prénom : {{$details['name']}}</p>
    <p>Adresse mail : {{$details['email']}}</p>
    <p>Numéro de téléphone : {{$details['phone']}}</p>
    <p>Message : {{$details['message']}}</p>
</body>

</html>