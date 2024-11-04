@vite(['resources/css/tarifs.css', 'resources/js/app.js'])

@extends('base')

@section('title', 'Tarifs')

@section('content')

    <h2 id="pagestart">Vous êtes sur la page tarifs.</h2>

    <div id="prices">
        <div id="subscribe1">
            <p class="kindofsubscribe">Adhésion annuelle à l'association</p>
            <p class="cost">15 €</p>
        </div>

        <div id="subscribe2">
            <p class="kindofsubscribe">La séance</p>
            <p class="cost">10 €</p>
        </div>

        <div id="subscribe3">
            <p class="kindofsubscribe">Le carnet de 10 séances</p>
            <p class="cost">90 €</p>
        </div>

        <div id="subscribe4">
            <p class="kindofsubscribe">Abonnement mensuel illimité sans cours</p>
            <p class="cost">30 €</p>
        </div>

        <div id="subscribe5">
            <p class="kindofsubscribe">Abonnement mensuel illimité sans cours</p>
            <p class="cost">60 €</p>
        </div>
    </div>

@endsection