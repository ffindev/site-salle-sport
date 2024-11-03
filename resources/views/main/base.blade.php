<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }} - @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

</head>
<body>
    <header>

        <h1>{{ config('app.name') }} - @yield('title')</h1>

        <nav>
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>

                <li><a href="{{ route('cours')}}">Cours</a></li>

                <li><a href="{{ route('tarifs') }}">Tarifs</a></li>

                <li><a href="{{ route('contact') }}">Contact</a></li>

                <li><a href="{{ route('mentions-legales') }}">MentionsLegales</a></li>
            </ul>
        </nav>

    </header>

    <div>
        @yield('content')
    </div>
    
    <footer>
        <a href="{{ route('mentions-legales') }}">MentionsLegales</a>
    </footer>

</body>

</html>