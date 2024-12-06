<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>


    @vite(['resources/css/app.css', 'resources/css/accueil.css', 'resources/css/contact.css', 'resources/css/cours.css', 'resources/css/tarifs.css', 'resources/css/mentions-legales.css', 'resources/js/app.js'])


</head>
<body>
    <header>

        <h1 id="websitename">{{ config('app.name') }}</h1>

        <div id="navbar">
            <a class="navlinks" href="{{ route('accueil') }}">Accueil</a>     
            <a class="navlinks" href="{{ route('cours')}}">Cours</a>
            <a class="navlinks" href="{{ route('tarifs') }}">Tarifs</a>
            <a class="navlinks" href="{{ route('contact') }}">Contact</a>
            <a class="navlinks" href="{{ route('mentions-legales') }}">Mentions Légales</a>
        </div>

    </header>

        <h2 id="pagetitle">@yield('title', 'titre par defaut')</h2>
    
        @section('content')
        @show
    <br>
    
    <footer>
        <a id="legallink" href="{{ route('mentions-legales') }}">MentionsLegales</a>

        <div id="credits">
        <a>FitZone© tous droits réservés 2024</a>
        
        <a>concepteur du site : F.FOND</a>
        </div>

    </footer>

</body>

</html>