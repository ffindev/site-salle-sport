@vite(['resources/css/tarifs.css', 'resources/js/app.js']) @extends('base')
@section('title', 'Tarifs') @section('content')

<p id="story">
    FitZone vous propose des formules flexibles adaptées à vos envies et à votre emploi du temps. Que vous soyez débutant ou sportif confirmé, choisissez l’abonnement qui vous correspond le mieux.
</p>

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
