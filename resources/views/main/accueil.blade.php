<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site-salle-sport</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Accueil</h1>
    <p>Vous êtes sur la page d'accueil.</p>

    <a href="{{ url('/cours') }}">aller à la page cours</a><br>
    <a href="{{ url('/tarifs') }}">aller à la page tarifs</a><br>
    <a href="{{ url('/contact') }}">aller à la page contact</a><br>
    <a href="{{ url('/mentions-legales') }}">aller à la page mentions-legales</a><br>

</body>
</html>