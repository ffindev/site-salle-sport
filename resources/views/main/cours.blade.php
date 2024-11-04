@vite(['resources/css/cours.css', 'resources/js/app.js'])

@extends('base')

@section('title', 'Cours')

@section('content')

    <h2 id="pagestart">Vous êtes sur la page cours.</h2>

    <p id="weekschedule">Agenda de la semaine</p>

    <div id="week">
        <div id="day1">
            <p class="hours">Lundi de 19H à 21H</p>
            <p class="activities">ZUMBA</p>
            <img class="gympresentationpics" src="{{ asset('img/pexels-olly-3775566.jpg') }}" alt="Image numéro 1 libre de droit d'un groupe de femmes faisant de l'exercice à l'intérieur d'une salle de sport
">
        </div>

        <div id="day2">
            <p class="hours">Mardi de 19H30 à 21H30</p>
            <p class="activities">PILATE</p>
            <img class="gympresentationpics" src="{{ asset('img/pexels-olly-868483.jpg') }}" alt="Image numéro 2 libre de droit d'un groupe de femme faisant du pilate">
        </div>

        <div id="day3">
            <p class="hours">Jeudi de 20H à 22H</p>
            <p class="activities">BOXE ANGLAISE</p>
            <img class="gympresentationpics" src="{{ asset('img/pexels-pixabay-163403.jpg') }}" alt="Image numéro 3 libre de droit d'un homme faisant de la boxe">
        </div>

        <div id="day4">
            <p class="hours">Vendredi de 20H à 22H</p>
            <p class="activities">HIIT</p>
            <img class="gympresentationpics" src="{{ asset('img/pexels-cottonbro-7675409.jpg') }}" alt="Image numéro 4 libre de droit d'une femme faisant du HIIT">
        </div>

        <div id="day5">
            <p class="hours">Samedi de 09H à 11H</p>
            <p class="activities">YOGA</p>
            <img class="gympresentationpics" src="{{ asset('img/pexels-olly-868704.jpg') }}" alt="Image numéro 5 libre de droit d'une femme faisant du Yoga
">
        </div>

    </div>


@endsection